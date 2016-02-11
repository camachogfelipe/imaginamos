<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Lineas extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	// ----------------------------------------------------------------------
	
	public function index() {	
		$data['is_home'] = false;
		$data['section'] = "lineas";		
		$data['linea'] = $this->get_linea();
		
		$lin = $this->uri->segment(2);
		if(!empty($lin)) :
			$data['miga'][0]['nombre'] = $this->get_miga($lin, "lin");
			$data['miga'][0]['link'] = $this->quitar_tildes($lin);
			$data['categoria'] = $this->get_categoria($lin, "lin");
		else : $data['categoria'] = $this->get_categoria();
		endif;
		
		if(isset($data['miga'])) $data['migaActual'] = $data['miga'][0]['nombre'];
		$cat = $this->uri->segment(3);
		if(!empty($cat)) :
			$data['miga'][1]['nombre'] = $this->get_miga($cat, "cat");
			$data['miga'][1]['link'] = $this->quitar_tildes($lin."/".$cat);
			$data['categoria'] = $this->get_categoria($lin, "lin");
			$data['scateg'] = $this->get_scategoria($cat, "cat");
			$data['sub'] = 0;
			if(empty($data['scateg'])) :
				$data['sub'] = 1;
				$data['productos'] = $this->get_producto($cat, false, 'cat', '0');
			endif;
		//else : $data['categoria'] = $this->get_categoria();
		endif;
		
		if(isset($data['miga'][1])) $data['migaActual'] = $data['miga'][1]['nombre'];
		$sca = $this->uri->segment(4);
		if(!empty($sca)) :
			$data['miga'][2]['nombre'] = $this->get_miga($sca, "sca");
			$data['miga'][2]['link'] = $this->quitar_tildes($lin."/".$cat."/".$sca);
			$data['scateg'] = $this->get_scategoria($sca);
			$data['productos'] = $this->get_producto($sca, false, 'scat', 1);
		//else : $data['scateg'] = $this->get_scategoria($cat, "cat");
		endif;
			
		if(isset($data['miga'][2])) $data['migaActual'] = $data['miga'][2]['nombre'];
		
		$data['footer']	= $this->get_footer();
		
		$this->_data['datos'] = $data;
		//echo "<pre>";print_r($data);exit();
		return $this->build();
	}

	function quitar_tildes($cadena) {
      $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
      $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
      $texto = str_replace($no_permitidas, $permitidas ,$cadena);
      return $texto;
    }
	
	// Función para obtener los datos del footer
	public function get_footer() {
		$this->db->select('cms_contacto.*');
		$this->db->from('cms_contacto');
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data[0];
	}
	
	private function result(&$result) {
		$data = array();
		if(!empty($result)) :
			foreach ($result->result() as $fila) {
				$data[] = $fila;
			}
		endif;
		return $data;
	}
	
	public function video() {
		$id = $this->input->post('id');
		$data = array();
		if(!empty($id)) :
			$data = $this->get_enterate($id);
		endif;
		
		$this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
	}
	
	// ----------------------------------------------------------------------
	
	public function get_linea($id = NULL) {
		$this->db->select('cms_linea.*');
		$this->db->from('cms_linea');
		if(!is_null($id)) :
			$this->db->where('cms_linea.id', $id);
		endif;
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data;
	}
	
	public function get_categoria($id = NULL, $tipo = NULL) {
		$texto = "";
		if(is_null($id)) :
			$texto = $this->get_mincategoria();
		elseif(!is_null($id) and $tipo == "lin") : $texto = " AND cms_linea.id = '" . $id . "'";
		else : $this->db->where('cms_categoria.id', $id);
		endif;
		
		$this->db->select('cms_categoria.*,cms_linea.titulo as line ,cms_media.path as img');
		$this->db->from('cms_categoria');
		$this->db->join('cms_media', 'cms_media.id  = cms_categoria.cms_media_id');
		$this->db->join('cms_linea', 'cms_linea.id  = cms_categoria.cms_linea_id'.$texto);
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data;
	}
	
	private function get_mincategoria() {
		$query = $this->db->query("SELECT MIN(cms_linea_id) AS minid FROM cms_categoria");
		foreach($query->result() as $row) $min = $row->minid;
		return " AND cms_linea.id = '" . $min . "'";
	}
	
	public function get_scategoria($id = NULL, $tipo = NULL) {
		$texto = "";
		if($tipo == "cat") :
			$texto = " AND cms_categoria.id = '" . $id . "'";
		endif;
		$this->db->select('cms_sub_categorias.*,cms_categoria.titulo as categoria, cms_categoria.cms_linea_id, cms_categoria.id as cat_id, cms_media.path as img');
		$this->db->from('cms_sub_categorias');
		$this->db->join('cms_media', 'cms_media.id  = cms_sub_categorias.cms_media_id');
		$this->db->join('cms_categoria', 'cms_categoria.id = cms_sub_categorias.cms_categoria_id'.$texto);
		if(!is_null($id) and $tipo == NULL) :
			$this->db->where('cms_sub_categorias.id', $id);
		endif;
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data;
	}
	
	public function get_producto($id = NULL, $ajax = false, $tipo = 'scat', $subc = 1) {
		$texto = $texto2 = "";
		if(!is_null($id)) :
			if($ajax == true) $this->db->where('cms_producto.id', $id);
			if($tipo == 'scat' and $ajax == false) {
				$texto = " AND cms_sub_categoria.id = '" . $id . "'";
				$this->db->where('cms_producto.cms_categoria_id', '0');
			}
			if($subc == 0) { $texto = ""; $this->db->where('cms_producto.cms_sub_categorias_id', '0'); }
			if($tipo == 'cat' and $ajax == false) {
				$texto2 = " AND cms_categoria.id = '" . $id . "'";
				$this->db->where('cms_producto.cms_categoria_id', $id);
			}
		endif;
		$texto = "";
		$this->db->select('cms_producto.*,cms_categoria.id as categoria, cms_sub_categorias.id as scategoriaid, cms_sub_categorias.titulo as scategoria ,cms_media.path as img, cms_media1.path as file');
		$this->db->from('cms_producto');
		$this->db->join('cms_media', 'cms_media.id  = cms_producto.cms_media_id');
		$this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_producto.cms_media_id2','left outer');
		$this->db->join('cms_sub_categorias', 'cms_sub_categorias.id = cms_producto.cms_sub_categorias_id'.$texto, 'left outer');
		$this->db->join('cms_categoria', 'cms_categoria.id = cms_producto.cms_categoria_id'.$texto2, 'left outer');
		
		$result = $this->db->get();
		
		$data = $this->result($result);
		 
		return $data;
	}
	
	private function get_miga($id, $tipo) {
		switch($tipo) :
			case 'lin' : $dato = $this->get_linea($id); break;
			case 'cat' : $dato = $this->get_categoria($id); break;
			case 'sca' : $dato = $this->get_scategoria($id); break;
		endswitch;

		foreach($dato as $key=>$value) :
			if($key == "titulo") return $value->titulo;
		endforeach;
	}
	
	public function producto() {
		$data = array();
		$data['is_home'] = false;
		$data['section'] = "lineas";
		if($this->uri->segment(4) === "producto") :
			$tid = explode("-", $this->uri->segment(5));
			$id = $tid[0];
			$cat = true;
			$data['miga'][0]['nombre'] = $this->get_miga($this->uri->segment(2), "lin");
			$data['miga'][0]['link'] = $this->quitar_tildes("lineas/" . $this->uri->segment(2));
			$data['miga'][1]['nombre'] = $this->get_miga($this->uri->segment(3), "cat");
			$data['miga'][1]['link'] = $this->quitar_tildes("lineas/" . $this->uri->segment(2) . "/" . $this->uri->segment(3));
			$data['migaActual'] = $data['miga'][1]['nombre'];
		elseif(is_numeric($this->uri->segment(4)) and $this->uri->segment(5) === "producto") :
			$tid = explode("-", $this->uri->segment(6));
			$id = $tid[0];
			$cat = false;
			$data['miga'][0]['nombre'] = $this->get_miga($this->uri->segment(2), "lin");
			$data['miga'][0]['link'] = $this->quitar_tildes("lineas/" . $this->uri->segment(2));
			$data['miga'][1]['nombre'] = $this->get_miga($this->uri->segment(3), "cat");
			$data['miga'][1]['link'] = $this->quitar_tildes("lineas/" . $this->uri->segment(2) . "/" . $this->uri->segment(3));
			$data['miga'][2]['nombre'] = $this->get_miga($this->uri->segment(4), "sca");
			$data['miga'][2]['link'] = $this->quitar_tildes("lineas/" . $this->uri->segment(2) . "/" . $this->uri->segment(3) . "/" . $this->uri->segment(4));
		    

			$data['migaActual'] = $data['miga'][2]['nombre'];
		else : $this->index();
		endif;
		if(!empty($id)) :
			if($cat == true){ 
				$datos = $this->get_producto($id, true, 'cat');
			}else{
			   $datos = $this->get_producto($id, true);
			}
			if(!empty($datos[0])) $datos[0]->texto = nl2br($datos[0]->texto);
			$data['productos'] = $datos[0];

		endif;
		//print_r($data); exit();
		$data['footer']	= $this->get_footer();
		$this->_data['datos'] = $data;
		
		$this->build('producto_details');
		
		//$this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
	}



}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Equipo extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	// ----------------------------------------------------------------------
	
	public function index() {	
		$data['is_home'] = false;
		$data['section'] = "equipo";
		$data['datos'] = $this->get_equipo();
		
		$data['footer']	= $this->get_footer();
		
		$this->_data['datos'] = $data;
		return $this->build();
	}
	
	// Función para obtener los datos del footer
	public function get_footer() {
		$this->db->select('cms_contacto.*');
		$this->db->from('cms_contacto');
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data[0];
	}
	
	public function trabajador() {
		$id = $this->input->post('id');
		$data = array();
		if(!empty($id)) :
			$data = $this->get_equipo($id);
			$data[0]->comentario = nl2br(htmlentities($data[0]->comentario));
		endif;
		
		$this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
	}
	
	public function get_equipo($id = NULL) {
		$this->db->select('cms_trabajador.*, imgmin.path as img_min, imgmax.path as img');
		$this->db->from('cms_trabajador');
		$this->db->join('cms_media AS imgmin', 'imgmin.id  = cms_trabajador.media_id');
		$this->db->join('cms_media AS imgmax', 'imgmax.id  = cms_trabajador.media_id1');
		$this->db->order_by("cms_trabajador.orden", "asc");
		if(!is_null($id)) :
			$this->db->where('cms_trabajador.id', $id);
		endif;
		
		$result = $this->db->get();
		if(!empty($result)) $data = $this->result($result);
		else $data = NULL;
		
		return $data;
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
	
	// ----------------------------------------------------------------------
}

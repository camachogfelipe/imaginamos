<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050006
     */

                        

class Articulos extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		//traemos los titulos
		$tit = new titulos_constitucion();
		$tit->order_by('cms_titulo', 'asc')->get();
		$this->_data['titulos'] = $tit->all_to_array(array("id", "cms_titulo"));
		$id = $this->uri->segment(2);
		// traemos el o los artículos
		$art = new constitucion();
		$art->order_by('cms_articulo', 'asc');
		$art->get();
		$this->_data['articulos'] = $art->all_to_array(array("id", "cms_articulo", "cms_texto", "titulos_constitucion_id"));
		if(!empty($id)) :
			$art->get_where(array("id" => $id));
			$this->_data['articulo_mostrar'] = $art->all_to_array(array("id", "cms_articulo", "cms_texto", "titulos_constitucion_id"));
		else :
			$this->_data['articulo_mostrar'][0] = $this->_data['articulos'][0];
		endif;
		//print_r($this->_data['articulo_mostrar']);
		$this->_data['comentarios'] = NULL;
		if(!empty($this->_data['articulo_mostrar'])) :
			$com = new comentarios();
			//Comentarios tipo articulo
			$com->join_related('imagen')->order_by("cms_clasificacion asc, imagen_id asc, blog_id asc")->where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "cms_clasificacion" => "A"))->get();//$com->check_last_query();
			$this->_data['comentarios']['A'] = $com->all_to_array(array("id", "cms_tipo", "cms_titulo", "cms_comentario", "constitucion_id", "imagen_path"));
			//Comentarios tipo inciso
			$com->join_related('imagen')->order_by("cms_clasificacion asc, imagen_id asc, blog_id asc")->get_where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "cms_clasificacion" => "I"));
			$this->_data['comentarios']['I'] = $com->all_to_array(array("id", "cms_tipo", "cms_titulo", "cms_comentario", "constitucion_id", "imagen_path"));
			//Comentarios tipo expresion
			$com->join_related('imagen')->order_by("cms_clasificacion asc, imagen_id asc, blog_id asc")->get_where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "cms_clasificacion" => "E"));
			$this->_data['comentarios']['E'] = $com->all_to_array(array("id", "cms_tipo", "cms_titulo", "cms_comentario", "constitucion_id", "imagen_path", "blog_id"));
			//Comentarios concordancias
			$com = new concordancias();
			$com->join_related("constitucion")->get_where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "cms_clasificacion" => "A"));
			if($com->result_count() > 0)
				$this->_data['comentarios']['A']['concordancias'] = $com->all_to_array(array("id", "cms_concordancias", "constitucion_cms_articulo"));
			$com->join_related("constitucion")->get_where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "cms_clasificacion" => "I"));
			if($com->result_count() > 0)
				$this->_data['comentarios']['I']['concordancias'] = $com->all_to_array(array("id", "cms_concordancias", "constitucion_cms_articulo"));
			$com->join_related("constitucion")->get_where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "cms_clasificacion" => "E"));
			if($com->result_count() > 0)
				$this->_data['comentarios']['E']['concordancias'] = $com->all_to_array(array("id", "cms_concordancias", "constitucion_cms_articulo"));
			//Comentarios sentencias
			$com = new sentencias();
			//sentencias demandas
			$com->join_related('demandas_tutelas')->get_where(array("demandas_tutelas.constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "sentencias.tipo" => "D"));
			$this->_data['comentarios']['sentencias_demandas'] = $com->all_to_array(array("id", "cms_tipo", "cms_titulo", "cms_comentario", "constitucion_id"));
			//sentencias tutelas
			$com->join_related('demandas_tutelas')->get_where(array("demandas_tutelas.constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "sentencias.tipo" => "T"));
			$this->_data['comentarios']['sentencias_tutelas'] = $com->all_to_array(array("id", "cms_tipo", "cms_titulo", "cms_comentario", "constitucion_id"));
			//Comentarios tutelas
			$com = new demandas_tutelas();
			//demandas
			$com->get_where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "tipo" => "D"));
			$this->_data['comentarios']['demandas'] = $com->all_to_array(array("id", "cms_tipo", "cms_titulo", "cms_comentario", "constitucion_id"));
			//tutelas
			$com->get_where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id'], "tipo" => "T"));
			$this->_data['comentarios']['tutelas'] = $com->all_to_array(array("id", "cms_tipo", "cms_titulo", "cms_comentario", "constitucion_id"));
			//Comentarios comunicados
			$com = new comunicados();
			$com->join_related("demandas_tutelas")->get_where(array("constitucion_id" => $this->_data['articulo_mostrar'][0]['id']));
			$this->_data['comentarios']['demandas'] = $com->all_to_array(array("id", "cms_tipo", "cms_titulo", "cms_comentario", "constitucion_id"));
		endif;
		//echo $this->_data['articulo_mostrar'][0]['id'];
		//echo "<pre>";print_r($this->_data['comentarios']);echo "</pre>";
		return $this->build();
	}
	
	private function contar($array, $k) {
		if(!empty($array)) :
			$total = 0;
			foreach($array as $key=>$val) :
				if(is_array($val)) : $total += $this->contar($val, $key);
				else :
					if($key == "cms_clasificacion" and $val == $k) $total += 1;
				endif;
			endforeach;
			return $total;
		else : return 0;
		endif;
	}

}
?>
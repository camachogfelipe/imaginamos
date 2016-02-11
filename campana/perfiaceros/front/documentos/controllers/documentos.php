<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Documentos extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	// ----------------------------------------------------------------------
	
	public function index() {	
		$data['is_home'] = false;
		$data['section'] = "documentos";
		$data['documentos'] = $this->get_documentos();
		
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
	
	public function get_documentos($id = NULL) {
		$this->db->select('cms_documento.*, cms_media.path as img , m1.path as file');
		$this->db->from('cms_documento');
		$this->db->join('cms_media', 'cms_media.id  = cms_documento.cms_media_id');
		$this->db->join('cms_media as m1', 'm1.id  = cms_documento.cms_media_id1');
		$this->db->order_by("cms_documento.destacado", "asc");
		$this->db->order_by("cms_documento.id", "desc");
		if(!is_null($id)) :
			$this->db->where('cms_documento.id', $id);
		endif;
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data;
	}
	
	private function result(&$result) {
		if(!empty($result)) :
			foreach ($result->result() as $fila) {
				$data[] = $fila;
			}
		else: $data = array();
		endif;
		return $data;
	}
	
	// ----------------------------------------------------------------------
}

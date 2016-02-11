<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Corte extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	// ----------------------------------------------------------------------
	
	public function index() {	
		$data['is_home'] = false;
		$data['section'] = "corte";
		$data['datos'] = $this->get_servicios();
		
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
	
	public function get_servicios() {
		$this->db->select('cms_servicio_corte.*, cms_media.path as vid, media1.path as files ');
		$this->db->from('cms_servicio_corte');
		$this->db->join('cms_media', 'cms_media.id  = cms_servicio_corte.cms_media_id');
		$this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_servicio_corte.cms_media_id1','left outer');
		
		$result = $this->db->get();
		
		$data = $this->result($result);
		
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

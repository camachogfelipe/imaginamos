<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Enterate extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	// ----------------------------------------------------------------------
	
	public function index() {	
		$data['is_home'] = false;
		$data['section'] = "enterate";
		$data['enterate'] = $this->get_enterate();
		
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
	
	public function get_enterate($id = NULL) {
		$this->db->select('cms_enterese.*, cms_media1.path as img_min ,cms_media.path as img ,cms_medeia_video.path as video, cms_propietario.propietario, cms_media_propietario.path as vid_path, cms_video.titulo as vid_titulo, cms_video.descripcion as vid_descripcion');
        $this->db->from('cms_enterese');
        $this->db->join('cms_media', 'cms_media.id  = cms_enterese.media_id');
        $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_enterese.media_id1');
        $this->db->join('cms_media as cms_medeia_video', 'cms_medeia_video.id  = cms_enterese.video_id', 'left outer');
				$this->db->join('cms_video', 'cms_video.id  = cms_enterese.video_id', 'left outer');
        $this->db->join('cms_propietario', 'cms_propietario.id  = cms_video.propietario_id', 'left outer');
        $this->db->join('cms_media as cms_media_propietario', 'cms_media_propietario.id  = cms_propietario.media_id', 'left outer');
				
				$this->db->order_by("cms_enterese.destacado", "desc");
				$this->db->order_by("cms_enterese.id", "desc");
		if(!is_null($id)) :
			$this->db->where('cms_enterese.id', $id);
		endif;
		
		$result = $this->db->get();
		//var_dump($this->db->last_query()); exit("salio");
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
	
	public function video() {
		$id = $this->input->post('id');
		$data = array();
		if(!empty($id)) :
			$data = $this->get_enterate($id);
			$data[0]->vid_descripcion = nl2br($data[0]->vid_descripcion);
		endif;
		
		$this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
	}
	
	// ----------------------------------------------------------------------
}

<?php

class Site_model extends DataMapper {

	public function __construct($id = NULL) {
		parent::__construct($id);
	}
	
	// ----------------------------------------------------------------------
	
	public function get_home() {
		$this->db->select('*');
		$this->db->from('cms_type_social');
		$this->_data['items'] = $this->getresult($this->db->get());
		$this->db->select('cms_redes_sociales.*, cms_type_social.name');
		$this->db->from('cms_redes_sociales');
		$this->db->join('cms_type_social', 'cms_type_social.id  = cms_redes_sociales.type_social_id');
		
		$result = $this->db->get();
		if(!empty($result)) :
		foreach ($result->result() as $fila) {
		$data['fmenu'][] = $fila;
		}
		else: $data['fmenu'] = array();
		endif;
		
		return $data;
	}
	
	// ----------------------------------------------------------------------
}
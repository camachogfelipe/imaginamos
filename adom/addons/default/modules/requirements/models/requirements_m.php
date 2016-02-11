<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	PQR Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Requirements_m extends MY_Model {

    protected $namespace = 'requirements';
    protected $slug_stream = 'requirements';

    public function __construct() {
        parent::__construct();
        $this->load->library('files/files');
        $this->_table = 'pages';
    }

    //create a new item
    public function setReq($input, $id_user = 0) {
        $user_id = $this->ion_auth->profile()->id;
        if ($id_user > 0)
            $user_id = $id_user;

        $to_insert = array(
            'created' => date('Y-m-d H:i:s'),
            'created_by' => $user_id,
            'country_id_requirements' => $input['country_id_requirements'],
            'city_id_requirements' => $input['city_id_requirements'],
            'building_id_requirements' => $input['building_id_requirements'],
            'office_id_requirements' => $input['office_id_requirements'],
            'description_requirements' => $input['description_requirements'],
        );
        return $this->db->insert('requirements', $to_insert);
    }

    //make sure the slug is valid
    public function _check_slug($slug) {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    }

}

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

class Properties_types_m extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->_table = 'properties_types';
    }

    //create a new item
    public function create($input) {
        $to_insert = array(
            'name' => $input['name'],
            'slug' => $this->_check_slug(underscore($input['name']))
        ); 
        return  $this->db->insert($this->_table, $to_insert);
    }

    //make sure the slug is valid
    public function _check_slug($slug) {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    } 

}

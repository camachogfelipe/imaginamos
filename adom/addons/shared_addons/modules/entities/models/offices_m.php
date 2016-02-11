<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Entities Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Offices_m extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->_table = 'offices';
    }

    //create a new item
    public function create($input) {
        $to_insert = array(
            'name' => $input['name'],
            'building_id' => $input['building_id'],
            'slug' => $this->_check_slug(underscore($input['name']))
        );

       return $this->db->insert($this->_table, $to_insert);         
    }

    //make sure the slug is valid
    public function _check_slug($slug) {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    }

    public function get_all($id=NULL) {
        $this->db
                ->select('offices.*, buildings.name AS building_name')
                ->join('buildings', 'offices.building_id = buildings.id', 'left')
                ->order_by('offices.name', 'DESC');
         if (isset($id) &&  $id > 0)
            $this->db->where('offices.building_id', $id);
        return $this->db->get('offices')->result();
    }
}

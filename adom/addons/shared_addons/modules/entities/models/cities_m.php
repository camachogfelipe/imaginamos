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

class Cities_m extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->_table = 'cities';
    }

    //create a new item
    public function create($input) {
        $to_insert = array(
            'name' => $input['name'],
            'country_id' => $input['country_id'],
            'slug' => utf8_decode($this->_check_slug(underscore($input['name'])))
        );

        return $this->db->insert($this->_table, $to_insert);
    }

    //make sure the slug is valid
    public function _check_slug($slug) {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    }

    public function get_all($id_country=NULL) {
        $this->db
                ->select('cities.*, countries.name AS country_name')
                ->join('countries', 'cities.country_id = countries.id', 'left')
                ->order_by('cities.name', 'DESC');
        if (isset($id_country) &&  $id_country > 0)
            $this->db->where('cities.country_id', $id_country);
        return $this->db->get('cities')->result();
    }

}

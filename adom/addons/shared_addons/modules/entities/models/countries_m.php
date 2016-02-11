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


class Countries_m extends MY_Model {

    public function __construct() {
        parent::__construct();

        /**
         * If the sample module's table was named "samples"
         * then MY_Model would find it automatically. Since
         * I named it "sample" then we just set the name here.
         */
        $this->_table = 'countries';
    }

    //create a new item
    public function create($input) {
        $to_insert = array(
            'name' => $input['name'],
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

}

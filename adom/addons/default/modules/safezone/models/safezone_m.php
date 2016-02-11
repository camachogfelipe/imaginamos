<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Safe Zone Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Safezone_m extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->_table = 'file_folders';
    }

    //create a new item
    public function create($input, $file_id) {
        $to_insert = array(
            'type_file_id' => $input['type'],
            'file_id' => $file_id
        );
        return $this->db->insert('files_type_files', $to_insert);
    }

    //make sure the slug is valid
    public function _check_slug($slug) {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    }

    public function get_all() {
        $this->load->library('files/files');
        $f = $this->db->where('name', 'safezone')->get('file_folders')->row();
        $files = Files::folder_contents($f->id);
        return $files;
        /* echo '<pre>';
          print_r($files);
          echo '</pre>';
          exit; */
    }

    public function get_folder() {
        $this->load->library('files/files');
        $f = $this->db->where('name', 'safezone')->get('file_folders')->row();
        return $f;
        /* echo '<pre>';
          print_r($files);
          echo '</pre>';
          exit; */
    }

    public function set_user_offices($id, $input) {
        foreach ($input['office_id'] as $value) {
            $to_insert = array(
                'user_id' => $id,
                'office_id' => $value
            );
            $this->db->insert('offices_user', $to_insert);
        }
    }

}

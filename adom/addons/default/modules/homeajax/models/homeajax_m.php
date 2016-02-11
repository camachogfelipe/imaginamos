<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home module
 *
 * @author 		Eduard Russy
 * @website		
 * @package 	
 * @subpackage 	
 * @copyright 	MIT
 */
class homeajax_m extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->_table = 'homeajax';
        // $this->load->model('files/file_folders_m');
        // $this->load->library('files/files');
        // $this->folder = $this->file_folders_m->get_by('name', 'homeajax');
    }

    public function get_home() {
        $this->db->where('slug', 'home');
        $page = $this->db->get('pages')->row();
        $this->db->where('id', $page->entry_id);
        $stream = $this->db->get("default_def_page_fields")->row();
        $page->description = $stream->body;
        return $page;
    }

    public function get_notices() {
        $result = $this->db->get('blog')->result();
        $i = 0;
        foreach ($result as $value) {
            $result[$i]->is_url = $result[$i]->is_live = FALSE;

            $this->db->where('id', $value->image);
            $image = $this->db->get('files')->row();
            $result[$i]->image = $image->filename;

            if ($value->status == "live") {
                $result[$i]->is_live = true;
            }
            $date=explode('-', $value->created);
            $value->year=$date[0];
            $value->month=$date[1];
            $day=  explode(' ', $date[2]);
            $value->day=$day[0];
            $i++;
        }
        return $result;
    }

}
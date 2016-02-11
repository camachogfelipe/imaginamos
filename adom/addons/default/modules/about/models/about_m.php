<?php

/**
 * This is a about module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	about Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About_m extends MY_Model {

    private $namespace = 'about';
    private $slug_stream = 'about';
    private $slug_page = 'about-us';

    public function __construct() {
        parent::__construct();
        $this->load->library('files/files');
        $this->_table = 'pages';
    }

    //create a new item
    public function create($input) {
        $user_id = $this->ion_auth->profile()->id;

        $this->db->where('slug', $this->slug_page);
        $page = $this->db->get('pages')->result();

        //** get 
        $this->db->where('slug', $this->slug_stream);
        $pageType = $this->db->get('page_types')->result();

        $this->db->insert("pages_{$this->namespace}", array('created' => date("Y-m-d H:i:s"), 'created_by' => $user_id));
        $entry_id = $this->db->insert_id();

        $to_insert = array(
            'title' => $input['name'],
            'parent_id' => $page[0]->id,
            'entry_id' => $entry_id,
            'uri' => $page[0]->uri . '/' . $this->_check_slug($input['name']),
            'type_id' => $pageType[0]->id,
            'slug' => $this->_check_slug($input['name']),
            'status' => 'live',
            'created_on' => now(),
        );
        return $this->db->insert('pages', $to_insert);
    }

    //make sure the slug is valid
    public function _check_slug($slug) {
        $slug=convert_accented_characters($slug);
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);
        return $slug;
    }

    public function get_all($id = NULL) {
        $this->db->where('slug', $this->slug_page);
        $pageService = $this->db->get('pages')->result();
        $this->db->where('parent_id', $pageService[0]->id);
        if ($id > 0) {
            $this->db->where('id', $id);
        }
        // select all from pages from namespace
        $page = $this->db->get('pages')->result();

        // select all from stream namespace
        for ($i = 0, $j = 1; $j <= count($page); $i++, $j++) {
            $page[$i]->is_video = $page[$i]->is_image = $page[$i]->is_video_url = $page[$i]->is_live = false;

            $this->db->where('id', $page[$i]->entry_id);
            $stream = $this->db->get("pages_{$this->namespace}")->row();

            // select image file from stream
            $this->db->where('id', $stream->{"image_{$this->slug_stream}"});
            $image = $this->db->get('files')->row();
            if ($image->filename != '')
                $page[$i]->is_image = true;
            $page[$i]->image = $image->filename;

            // select video file from stream
            $this->db->where('id', $stream->{"video_{$this->slug_stream}"});
            $video = $this->db->get('files')->row();
            if ($video->filename != '')
                $page[$i]->is_video = true;
            $page[$i]->video = $video->filename;

            //select ur_video from stream
            $url = explode('=', $stream->{"video_url_{$this->slug_stream}"});
            $page[$i]->url_video = $url['1'];
            if ($stream->{"video_url_{$this->slug_stream}"} != '')
                $page[$i]->is_video_url = true;

            $page[$i]->description = $stream->{"description_{$this->slug_stream}"};

            if ($stream->{"state_{$this->slug_stream}"} == 1)
                $page[$i]->is_live = true;
        }
        /* echo '<pre>';
          print_r($page);
          exit; */
        return $page;
    }
    
     public function get_all_live($id = NULL) {
        $this->db->where('slug', $this->slug_page);
        $pageService = $this->db->get('pages')->result();
        $this->db->where('parent_id', $pageService[0]->id);
        if ($id > 0) {
            $this->db->where('id', $id);
        }
        // select all from pages from namespace
        $this->db->where('status','live');
        $page = $this->db->get('pages')->result();

        // select all from stream namespace
        for ($i = 0, $j = 1; $j <= count($page); $i++, $j++) {
            $page[$i]->is_video = $page[$i]->is_image = $page[$i]->is_video_url = $page[$i]->is_live = false;

            $this->db->where('id', $page[$i]->entry_id);
            $stream = $this->db->get("pages_{$this->namespace}")->row();

            // select image file from stream
            $this->db->where('id', $stream->{"image_{$this->slug_stream}"});
            $image = $this->db->get('files')->row();
            if ($image->filename != '')
                $page[$i]->is_image = true;
            $page[$i]->image = $image->filename;

            // select video file from stream
            $this->db->where('id', $stream->{"video_{$this->slug_stream}"});
            $video = $this->db->get('files')->row();
            if ($video->filename != '')
                $page[$i]->is_video = true;
            $page[$i]->video = $video->filename;

            //select ur_video from stream
            $url = explode('=', $stream->{"video_url_{$this->slug_stream}"});
            $page[$i]->url_video = $url['1'];
            if ($stream->{"video_url_{$this->slug_stream}"} != '')
                $page[$i]->is_video_url = true;

            $page[$i]->description = $stream->{"description_{$this->slug_stream}"};

            if ($stream->{"state_{$this->slug_stream}"} == 1)
                $page[$i]->is_live = true;
        }
        /* echo '<pre>';
          print_r($page);
          exit; */
        return $page;
    }

    public function get_page($id = NULL) {
        $this->db->where('slug', $this->slug_page);
        $page = $this->db->get('pages')->row();
        $this->db->where('id', $page->entry_id);
        $stream = $this->db->get("pages_{$this->slug_stream}")->row();
        $page->description = $stream->{"description_{$this->slug_stream}"};
        return $page;
    }

}

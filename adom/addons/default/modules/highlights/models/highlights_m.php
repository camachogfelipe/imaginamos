<?php

/**
 * This is a highlights module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	highlights Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class highlights_m extends MY_Model {

    private $namespace = 'highlights';
    private $slug_stream = 'highlights';
    private $slug_page = 'destacados';

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
            'uri' => $page[0]->uri . '/' . $this->_check_slug(underscore($input['name'])),
            'type_id' => $pageType[0]->id,
            'slug' => $this->_check_slug(underscore($input['name'])),
            'status' => 'live',
            'created_on' => now(),
        );
        return $this->db->insert('pages', $to_insert);
    }

    //make sure the slug is valid
    public function _check_slug($slug) {
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
            $page[$i]->stream = $stream;


            $page[$i]->is_image = true;



            //select user
            $this->db->where('user_id', $stream->created_by);
            $user = $this->db->get('profiles')->row();
            $page[$i]->user = $user;

            // select image file from stream
            $this->db->where('id', $stream->{"image_{$this->slug_stream}"});
            $image = $this->db->get('files')->row();
            $page[$i]->image = $image->filename;

            // select video file from stream
            $this->db->where('id', $stream->{"video_{$this->slug_stream}"});
            $video = $this->db->get('files')->row();
            $page[$i]->video = $video->filename;

            //select ur_video from stream
            $url = explode('=', json_decode($stream->{"video_url_{$this->slug_stream}"})->url);
            $page[$i]->url_video = $url['1'];

            $page[$i]->description = html_entity_decode($stream->{"description_{$this->slug_stream}"}, ENT_QUOTES, "UTF-8");
						
						$page[$i]->url = $stream->{"url_{$this->slug_stream}"};

            if ($page[$i]->status == 'live')
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

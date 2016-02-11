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

class vacantes_m extends MY_Model {

    private $namespace = 'vacantes';
    private $slug_stream = 'vacantes';
    private $slug_page = 'vacante';

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

        convert_accented_characters($slug);
        $slug = preg_replace('/\s+/', '-', $slug);
        return $this->normaliza($slug);
    }

    public function normaliza($cadena) {
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
        $cadena = utf8_decode($cadena);
        $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
        $cadena = strtolower($cadena);
        return utf8_encode($cadena);
    }

    public function get_all($id = NULL, $city_id = NULL) {

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

            $page[$i]->city_id = $stream->{"city_id_{$this->slug_stream}"};

            if ($stream->{"type_public_{$this->slug_stream}"} == 1) {
                $page[$i]->is_image = true;
            } else if ($stream->{"type_public_{$this->slug_stream}"} == 2) {
                $page[$i]->is_video = true;
            } else {
                $page[$i]->is_video_url = true;
            }

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
            $page[$i]->description = $stream->{"description_{$this->slug_stream}"};

            if ($page[$i]->status == 'live')
                $page[$i]->is_live = true;
        }
//         echo '<pre>';
//          print_r($page);
//          exit; 
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

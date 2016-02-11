<?php
class Site_model extends CI_Model{
    
    var $path;
    
    function __construct() {
        parent::__construct();
        $this->path = realpath(APPPATH . "../assets/attach/");
    }
    
    function upload(){
        $config = array(
            'allowed_types' => 'pdf',
            'upload_path' => $this->path,
            'max_size' => 300000
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload();
    }
    
}
<?php
class Home_model extends CI_Model{
    var $path;
    function __construct() {
        parent::__construct();
        $this->path = realpath(APPPATH . "../assets/home/");
    }
    function get(){
        $this->db->where('id',1);
        $q = $this->db->get('home');
        if($q->num_rows() > 0){
            return $q->row();
        }else{
            return false;
        }
    }
    function upload($name){
        $config = array(
            'allowed_types' => 'png',
            'upload_path' => $this->path,
            'max_size' => 300000,
            'file_name' => $name
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload();
    }
    function update($data){
        $this->db->where('id',1);
        $this->db->update('home',$data);
    }
}
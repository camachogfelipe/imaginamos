<?php

class Us extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function upload($namex, $field) {
        $config = array(
            'allowed_types' => 'jpeg|png|jpg',
            'upload_path' => realpath(APPPATH . '../assets/us_img/'),
            'max_size' => 300000,
            'file_name' => $namex
        );

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($field)) {
            return true;
        } else {
            return false;
        }
    }

    function index() {
        $this->load->model('cms/cms_model');
        
        $this->db->where('id',1);
        $data1 = $this->db->get('us')->row();
        
        $this->db->where('id',2);
        $data2 = $this->db->get('us')->row();
        
        $this->db->where('id',3);
        $data3 = $this->db->get('us')->row();
        
        $this->db->where('id',4);
        $data4 = $this->db->get('us')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data1"] = $data1;
        $template_date["data2"] = $data2;
        $template_date["data3"] = $data3;
        $template_date["data4"] = $data4;
        $this->load->view('us_view', $template_date);
    }

    function update() {
        
        if(strlen(strip_tags($this->input->post('text'))) > 861 ){
            redirect('us/index/errT1');
            exit;
        }
        
        $id = $this->input->post('id');
        $data = array(
            'text' => $this->input->post('text'),
            'title' => $this->input->post('title')
        );
        $this->db->where('id', $id);
        $this->db->update('us', $data);
        redirect('us/index/ok');
    }

    function updateMain() {

        $img = $_FILES['userfile']['name'];
        $id = $this->input->post('id');
        
        if(strlen(strip_tags($this->input->post('text'))) > 1782 ){
            redirect('us/index/errT2');
            exit;
        }

        if ($img == "") {
            $data = array(
                'text' => $this->input->post('text'),
                'image' => $this->input->post('image'),
                'title' => $this->input->post('title')
            );

            $this->db->where('id', $id);
            $this->db->update('us', $data);
            redirect('us/index/ok');
        } else {

            unlink(APPPATH . '../assets/us_img/' . $this->input->post('image'));

            $ext = substr(strrchr($img, '.'), 1);
            $name = $id . "." . $ext;

            if ($this->upload($name, 'userfile')) {
                $data = array(
                    'text' => $this->input->post('text'),
                    'image' => $name,
                    'title' => $this->input->post('title')
                );
                $this->db->where('id', $id);
                $this->db->update('us', $data);
                redirect('us/index/ok');
            } else {
                redirect('us/index/img2');
            }
        }
    }

    function delete() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('us');
        redirect('us/index/ok');
    }

}
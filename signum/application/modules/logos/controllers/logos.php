<?php

class Logos extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function upload($namex, $field) {
        $config = array(
            'allowed_types' => 'jpeg|png|jpg',
            'upload_path' => realpath(APPPATH . '../assets/logos_img/'),
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

        $data = $this->db->get('logos')->result();
        $servicios = $this->db->get('area')->result();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $template_date["areas"] = $servicios;
        $this->load->view('logos_view', $template_date);
    }

    function add() {

        $img = $_FILES['userfile']['name'];

        $data = array(
            'title' => $this->input->post('title'),
            'image' => ''
        );

        $this->db->insert('logos', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img, '.'), 1);
        $name = $id . "." . $ext;

        if ($this->upload($name, 'userfile')) {
            $data = array(
                'image' => $name
            );
            $this->db->where('id', $id);
            $this->db->update('logos', $data);
            redirect('logos/index/ok');
        } else {
            redirect('logos/index/img2');
        }
    }

    function view() {
        $id = $this->uri->segment(3);
        $this->load->model('cms/cms_model');

        $this->db->where('id', $id);
        $data = $this->db->get('logos')->row();
        $servicios = $this->db->get('area')->result();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $template_date["areas"] = $servicios;
        $this->load->view('logos_edit_view', $template_date);
    }

    function update() {

        $img = $_FILES['userfile']['name'];
        $id = $this->input->post('id');

        if ($img == "") {
            $data = array(
                'title' => $this->input->post('title'),
                'image' => $this->input->post('image')
            );

            $this->db->where('id', $id);
            $this->db->update('logos', $data);
        } else {
            
            unlink(APPPATH . '../assets/logos_img/' . $this->input->post('image'));

            $ext = substr(strrchr($img, '.'), 1);
            $name = $id . "." . $ext;

            if ($this->upload($name, 'userfile')) {
                $data = array(
                    'title' => $this->input->post('title'),
                    'image' => $name
                );
                $this->db->where('id', $id);
                $this->db->update('logos', $data);
                redirect('logos/index/ok');
            } else {
                redirect('logos/index/img2');
            }
        }
    }
    
    function delete(){
        $this->db->where('id',$this->uri->segment(3));
        $this->db->delete('logos');
        redirect('logos/index/ok');
    }

}
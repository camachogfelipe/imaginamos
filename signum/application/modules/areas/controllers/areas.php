<?php

class Areas extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function upload($namex, $field) {
        $config = array(
            'allowed_types' => 'jpeg|png|jpg',
            'upload_path' => realpath(APPPATH . '../assets/area_img/'),
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

    function upload2($namex, $field) {
        $config = array(
            'allowed_types' => 'jpeg|png|jpg',
            'upload_path' => realpath(APPPATH . '../assets/area_img2/'),
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
        $this->db->order_by('orden','ASC');
        $data = $this->db->get('area')->result();
        $dataG = $this->db->get('area_general')->row();
        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $template_date["dataG"] = $dataG;
        $this->load->view('area_view', $template_date);
    }

    function adda() {

        $img = $_FILES['userfile']['name'];

        $data = array(
            'area_title' => $this->input->post('title'),
            'area_icon' => '',
            'area_text' => $this->input->post('text')
        );
        $this->db->insert('area', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img, '.'), 1);
        $name = $id . "." . $ext;

        if ($this->upload2($name, 'userfile')) {
            $data = array(
                'area_icon' => $name
            );
            $this->db->where('area_id', $id);
            $this->db->update('area', $data);
            redirect('areas/index/ok');
        } else {
            redirect('areas/index/err');
        }
    }

    function updateG() {
        $data = array(
            'title' => $this->input->post('title'),
            'text' => $this->input->post('text')
        );
        $this->db->where('id', 1);
        $this->db->update('area_general', $data);
        redirect('areas/index/ok');
    }

    function updatea() {

        $img = $_FILES['userfile']['name'];
        $id = $this->input->post('id');



        if ($img == "") {
            $data = array(
                'area_title' => $this->input->post('title'),
                'area_icon' => $this->input->post('image'),
                'area_text' => $this->input->post('text')
            );
            $this->db->where('area_id', $this->input->post('id'));
            $this->db->update('area', $data);
            redirect('areas/index/ok');
        } else {
            unlink(APPPATH . '../assets/area_img2/' . $this->input->post('image'));
            $ext = substr(strrchr($img, '.'), 1);
            $name = $id . "." . $ext;

            if ($this->upload2($name, 'userfile')) {
                $data = array(
                    'area_title' => $this->input->post('title'),
                    'area_icon' => $name,
                    'area_text' => $this->input->post('text')
                );
                $this->db->where('area_id', $this->input->post('id'));
                $this->db->update('area', $data);
                redirect('areas/index/ok');
            } else {
                redirect('areas/index/err');
            }
        }
    }

    function deletea() {
        $id = $this->uri->segment(3);
        $this->db->where('area_id', $id);
        if ($this->db->delete('area')) {
            redirect('areas/index/ok');
        } else {
            redirect('areas/index/errkey');
        }
    }

    function deletes() {
        $id = $this->uri->segment(3);
        $idA = $this->uri->segment(4);

        $this->db->where('service_id', $id);
        $this->db->delete('service');

        redirect('areas/servicios/' . $idA);
    }

    function viewa() {
        $id = $this->uri->segment(3);
        $this->load->model('cms/cms_model');

        $this->db->where('area_id', $id);
        $data = $this->db->get('area')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('area_edit_view', $template_date);
    }

    function views() {
        $id = $this->uri->segment(3);
        $this->load->model('cms/cms_model');

        $this->db->where('service_id', $id);
        $data = $this->db->get('service')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('service_edit_view', $template_date);
    }

    function servicios() {
        $idArea = $this->uri->segment(3);
        $this->load->model('cms/cms_model');

        $this->db->where('service_area_id', $idArea);
        $data = $this->db->get('service')->result();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $template_date["area_id"] = $idArea;
        $this->load->view('service_view', $template_date);
    }

    function adds() {
        $img = $_FILES['userfile']['name'];
        $data = array(
            'service_title' => $this->input->post('service_title'),
            'service_subtitle' => $this->input->post('service_subtitle'),
            'service_text' => $this->input->post('service_text'),
            'service_image' => '',
            'service_area_id' => $this->input->post('service_area_id')
        );
        $this->db->insert('service', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img, '.'), 1);
        $name = $id . "." . $ext;

        if ($this->upload($name, 'userfile')) {
            $data = array(
                'service_image' => $name
            );
            $this->db->where('service_id', $id);
            $this->db->update('service', $data);
            redirect('areas/servicios/' . $this->input->post('service_area_id') . '/ok');
        } else {
            redirect('areas/servicios/' . $this->input->post('service_area_id') . '/errIm');
        }
    }

    function updates() {
        $img = $_FILES['userfile']['name'];
        $id = $this->input->post('service_id');
        if ($img == "") {
            $data = array(
                'service_title' => $this->input->post('service_title'),
                'service_subtitle' => $this->input->post('service_subtitle'),
                'service_text' => $this->input->post('service_text'),
                'service_image' => $this->input->post('service_image'),
                'service_area_id' => $this->input->post('service_area_id')
            );
            $this->db->where('service_id', $id);
            $this->db->update('service', $data);
            redirect('areas/servicios/' . $this->input->post('service_area_id') . '/ok');
        } else {
            unlink(APPPATH . '../assets/area_img/' . $this->input->post('service_image'));
            $ext = substr(strrchr($img, '.'), 1);
            $name = $id . "." . $ext;

            if ($this->upload($name, 'userfile')) {
                $data = array(
                    'service_title' => $this->input->post('service_title'),
                    'service_subtitle' => $this->input->post('service_subtitle'),
                    'service_text' => $this->input->post('service_text'),
                    'service_image' => $name,
                    'service_area_id' => $this->input->post('service_area_id')
                );
                $this->db->where('service_id', $id);
                $this->db->update('service', $data);
                redirect('areas/servicios/' . $this->input->post('service_area_id') . '/ok');
            } else {
                redirect('areas/servicios/' . $this->input->post('service_area_id') . '/errIm');
            }
        }
    }
    
    function changeOrder() {

        //$this->load->model('cms_model');

        $newOrder = $this->input->post('mod');
        $changed = 1;
        
//        print_r($newOrder);
//        
//        exit;
        foreach ($newOrder as $orden => $id) {
            
            $changedArray = array(
                'orden' => $changed
            );
            
            
            
            $this->db->where('area_id',$id);
            if ($this->db->update('area',$changedArray)) {
                $changed++;
            }
        }
    }

}
<?php

class Portafolio extends MX_Controller {

    function upload($namex, $field) {
        $config = array(
            'allowed_types' => 'jpeg|png|jpg',
            'upload_path' => realpath(APPPATH . '../assets/portfolio_img/'),
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
        $servicios = $this->db->get('area')->result();
        if ($this->db->get('portfolio')->num_rows() == 0) {
            $data = array();
        } else {
            $data = $this->db->get('portfolio')->result();
        }

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $template_date["areas"] = $servicios;
        $this->load->view('portfolio_view', $template_date);
    }

    function view() {
        $this->load->model('cms/cms_model');
        $servicios = $this->db->get('area')->result();
        $this->db->where('id', $this->uri->segment(3));

        $data = $this->db->get('portfolio')->row();
        $template_date["areas"] = $servicios;
        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('portfolio_edit', $template_date);
    }

    function add() {

        $img1 = $_FILES['userfile']['name'];
        $img2 = $_FILES['userfile2']['name'];

        $data = array(
            'image' => '',
            'icon' => '',
            'title' => $this->input->post('title'),
            'text' => $this->input->post('text'),
            'idArea' => $this->input->post('idArea')
        );
        $this->db->insert('portfolio', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img1, '.'), 1);
        $name = $id . "." . $ext;

        $ext2 = substr(strrchr($img2, '.'), 1);
        $name2 = $id . "1." . $ext2;

        if ($this->upload($name, 'userfile')) {
            $data = array(
                'image' => $name
            );
            $this->db->where('id', $id);
            $this->db->update('portfolio', $data);
        } else {
            redirect('portafolio/index/img1');
        }

        if ($this->upload($name2, 'userfile2')) {
            $data = array(
                'image' => $name,
                'icon' => $name2
            );
            $this->db->where('id', $id);
            $this->db->update('portfolio', $data);
            redirect('portafolio/index/ok');
        } else {
            redirect('portafolio/index/img2');
        }
    }

    function update() {

        $img1 = $_FILES['userfile']['name'];
        $img2 = $_FILES['userfile2']['name'];

        $id = $this->input->post('id');

        $ext = substr(strrchr($img1, '.'), 1);
        $name = $id . "." . $ext;

        $ext2 = substr(strrchr($img2, '.'), 1);
        $name2 = $id . "1." . $ext2;

        if ($img1 == "") {
            $data = array(
                'image' => $this->input->post('oldImage'),
                'title' => $this->input->post('title'),
                'text' => $this->input->post('text'),
                'idArea' => $this->input->post('idArea')
            );
            $this->db->where('id', $id);
                $this->db->update('portfolio', $data);
        } else {
            unlink(APPPATH . '../assets/portfolio_img/' . $this->input->post('oldImage'));
            if ($this->upload($name, 'userfile')) {


                $data = array(
                    'image' => $name,
                    'title' => $this->input->post('title'),
                    'text' => $this->input->post('text'),
                    'idArea' => $this->input->post('idArea')
                );
                $this->db->where('id', $id);
                $this->db->update('portfolio', $data);
            } else {
                redirect('portafolio/index/img2');
            }
        }
        if ($img2 == "") {
            $data = array(
                'icon' => $this->input->post('oldImage2'),
                'title' => $this->input->post('title'),
                'text' => $this->input->post('text'),
                'idArea' => $this->input->post('idArea')
            );
            $this->db->where('id', $id);
                $this->db->update('portfolio', $data);
        } else {
            unlink(APPPATH . '../assets/portfolio_img/' . $this->input->post('oldImage2'));
            if ($this->upload($name2, 'userfile2')) {

                $data = array(
                    'icon' => $name2,
                    'title' => $this->input->post('title'),
                    'text' => $this->input->post('text'),
                    'idArea' => $this->input->post('idArea')
                );
                $this->db->where('id', $id);
                $this->db->update('portfolio', $data);
            } else {
                redirect('portafolio/index/img2');
            }
        }

        redirect('portafolio/index/ok');
    }

    function delete() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('portfolio');
        redirect('portafolio/index/ok');
    }

}
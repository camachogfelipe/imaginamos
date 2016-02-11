<?php

class Customers extends MX_Controller {

    function upload($namex, $field) {
        $config = array(
            'allowed_types' => 'jpeg|png|jpg',
            'upload_path' => realpath(APPPATH . '../assets/customers_img/'),
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

        if ($this->db->get('customers')->num_rows() == 0) {
            $data = array();
        } else {
            $data = $this->db->get('customers')->result();
        }

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('customers_view', $template_date);
    }

    function view() {
        $this->load->model('cms/cms_model');
        $this->db->where('id', $this->uri->segment(3));

        $data = $this->db->get('customers')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('customer_edit', $template_date);
    }

    function add() {

        $img1 = $_FILES['userfile']['name'];
        $img2 = $_FILES['userfile2']['name'];

        $data = array(
            'bigimage' => '',
            'smallimage' => ''
        );
        $this->db->insert('customers', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img1, '.'), 1);
        $name = $id . "." . $ext;

        $ext2 = substr(strrchr($img2, '.'), 1);
        $name2 = $id . "1." . $ext2;

        if ($this->upload($name, 'userfile')) {
            $data = array(
                'bigimage' => $name
            );
            $this->db->where('id', $id);
            $this->db->update('customers', $data);
        } else {
            redirect('customers/index/img1');
        }

        if ($this->upload($name2, 'userfile2')) {
            $data = array(
                'bigimage' => $name,
                'smallimage' => $name2
            );
            $this->db->where('id', $id);
            $this->db->update('customers', $data);
            redirect('customers/index/ok');
        } else {
            redirect('customers/index/img2');
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
                'bigimage' => $this->input->post('oldImage')
            );
        } else {
            unlink(APPPATH . '../assets/customers_img/' . $this->input->post('oldImage'));
            if ($this->upload($name, 'userfile')) {
                
                
                $data = array(
                    'bigimage' => $name,
                );
                $this->db->where('id', $id);
                $this->db->update('customers', $data);
            } else {
                redirect('customers/index/img2');
            }
        }
        if ($img2 == "") {
            $data = array(
                'smallimage' => $this->input->post('oldImage2')
            );
        } else {
            unlink(APPPATH . '../assets/customers_img/' . $this->input->post('oldImage2'));
            if ($this->upload($name2, 'userfile2')) {
                
                $data = array(
                    'smallimage' => $name2,
                );
                $this->db->where('id', $id);
                $this->db->update('customers', $data);
                
            } else {
                redirect('customers/index/img2');
            }
        }
        
        redirect('customers/index/ok');
    }

    function delete() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('customers');
        redirect('customers/index/ok');
    }

}
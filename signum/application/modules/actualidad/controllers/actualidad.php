<?php

class Actualidad extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function upload($namex, $field, $folder = '../assets/actualidad_img/', $tipo = "img") {
				if($tipo == "pdf") $allowed_types = "pdf";
				else $allowed_types = 'jpeg|png|jpg';
        $config = array(
            'upload_path' => realpath(APPPATH . $folder),
            'max_size' => 300000,
            'file_name' => $namex,
						'allowed_types' => $allowed_types
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

        $data = $this->db->get('actualidad')->result();
        $servicios = $this->db->get('area')->result();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $template_date["areas"] = $servicios;
        $this->load->view('actualidad_view', $template_date);
    }

    function add() {
        $datee = explode('/', $this->input->post('date'));
        $datee = $datee[2] . '-' . $datee[0] . '-' . $datee[1];
        $img = $_FILES['userfile']['name'];
				$pdf = $_FILES['pdf']['name'];

        $data = array(
            'date' => $datee,
            'title' => $this->input->post('title'),
            'text' => $this->input->post('text'),
            'image' => '',
						'pdf' => ''
        );

        $this->db->insert('actualidad', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img, '.'), 1);
        $name_img = $id . "." . $ext;

        if ($this->upload($name_img, 'userfile')) {
            $data = array(
                'date' => $datee,
                'title' => $this->input->post('title'),
                'text' => $this->input->post('text'),
                'image' => $name
            );
            $this->db->where('id', $id);
            $this->db->update('actualidad', $data);
            //redirect('actualidad/index/ok');
        } else {
            //redirect('actualidad/index/img2');
        }
				
				$ext = substr(strrchr($pdf, '.'), 1);
        $name_pdf = $id . "." . $ext;
				
				if ($this->upload($name_pdf, 'userfile', '../assets/actualidad_pdf/', "pdf")) {
            $data = array(
                'date' => $datee,
                'title' => $this->input->post('title'),
                'text' => $this->input->post('text'),
                'image' => $name_img,
								'pdf' => $name_pdf
            );
            $this->db->where('id', $id);
            $this->db->update('actualidad', $data);
            redirect('actualidad/index/ok');
        } else {
            redirect('actualidad/index/img2');
        }
    }

    function view() {
        $id = $this->uri->segment(3);
        $this->load->model('cms/cms_model');

        $this->db->where('id', $id);
        $data = $this->db->get('actualidad')->row();
        $servicios = $this->db->get('area')->result();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $template_date["areas"] = $servicios;
        $this->load->view('actualidad_edit_view', $template_date);
    }

    function update() {
        $datee = explode('/', $this->input->post('date'));
        $datee = $datee[2] . '-' . $datee[0] . '-' . $datee[1];
        $img = $_FILES['userfile']['name'];
				$pdf = $_FILES['pdf']['name'];
        $id = $this->input->post('id');
        
        if($this->input->post('daily')){
            $dataU = array('daily' => 0);
            $this->db->update('actualidad',$dataU);
            $daily = 1;
        }else{
            $daily = 0;
        }

        if ($img == "") {
            $data = array(
                'date' => $datee,
                'title' => $this->input->post('title'),
                'text' => $this->input->post('text'),
                'image' => $this->input->post('image'),
                'daily' => $daily
            );

            $this->db->where('id', $id);
            $this->db->update('actualidad', $data);
            //redirect('actualidad/index/ok');
        } else {
						if(file_exists(APPPATH . '../assets/actualidad_img/' . $this->input->post('image'))) :
	            unlink(APPPATH . '../assets/actualidad_img/' . $this->input->post('image'));
						endif;

            $ext = substr(strrchr($img, '.'), 1);
            $name_img = $id . "." . $ext;
            if ($this->upload($name_img, 'userfile')) {
                $data = array(
                    'date' => $datee,
                    'title' => $this->input->post('title'),
                    'text' => $this->input->post('text'),
                    'image' => $name_img,
                    'daily' => $daily
                );
                $this->db->where('id', $id);
                $this->db->update('actualidad', $data);
                //redirect('actualidad/index/ok');
            } else {
                //redirect('actualidad/index/img2');
            }
        }
				if ($pdf == "") {
            $data = array(
								'pdf' => $this->input->post('pdfOld')
            );

            $this->db->where('id', $id);
            $this->db->update('actualidad', $data);
            redirect('actualidad/index/ok');
        } else {

            unlink(APPPATH . '../assets/actualidad_pdf/' . $this->input->post('pdfOld'));

            $ext = substr(strrchr($pdf, '.'), 1);
            $name_pdf = $id . "." . $ext;

            if ($this->upload($name_pdf, 'pdf', '../assets/actualidad_pdf/', "pdf")) {
                $data = array(
                    'pdf' => $name_pdf
                );
                $this->db->where('id', $id);
                $this->db->update('actualidad', $data);
                redirect('actualidad/index/ok');
            } else {
                redirect('actualidad/index/img2');
            }
        }
    }

    function delete() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('actualidad');
        redirect('actualidad/index/ok');
    }

}
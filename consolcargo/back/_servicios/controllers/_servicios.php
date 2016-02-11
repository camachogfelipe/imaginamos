<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _servicios extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_servicios_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['servicios'] = $this->cms_servicios_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['servicios'] = $this->cms_servicios_model->getServicios($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function detalle() {
        redirect('cms/detalle_servicios/index/-1/'.$this->uri->segment(4), 'refresh');
    }

    function delete() {
        $this->cms_servicios_model->deleteServicios($this->uri->segment(4));
        redirect('cms/servicios/index/1', 'refresh');
    }

    function guardarServicios() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }
        try {
            $sourceBig = './uploads/front/servicios/';
            $width = 248;
            $height = 96;
            $nameImagenForm = 'imagen';
            $uploadData = $this->uploadImage($nameImagenForm, $sourceBig, $width, $height);

            if ($uploadData == false) {
                $this->add();
                return;
            }

            if ($uploadData == "") {
                redirect('cms/servicios/index/1', 'refresh');
            }

            $isSave = $this->cms_servicios_model->addServicios($uploadData['file_name']);

            if ($isSave) {
                redirect('cms/servicios/index/1', 'refresh');
            }
        } catch (Exception $e) {
            redirect('cms/servicios/index/0', 'refresh');
        }
    }

    function editarServicios() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $sourceBig = './uploads/front/servicios/';
        $width = 248;
        $height = 96;

        $nameImagenForm = 'imagen';
        $img = $_FILES[$nameImagenForm]['name'];
        $fileName = NULL;
        if ($img != "") {
            $uploadData = $this->uploadImage($nameImagenForm, $sourceBig, $width, $height);
            $fileName = $uploadData['file_name'];

            if ($uploadData == false) {
                $this->edit();
                return;
            }
        }

        $this->cms_servicios_model->editServicios($this->uri->segment(4), $fileName);
        redirect('cms/servicios/index/1', 'refresh');
    }

    function uploadImage($imagen, $source, $width, $height) {
        $img = $_FILES[$imagen]['name'];

        if (!empty($img)) {
            $config['upload_path'] = $source;
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '2000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($imagen)) {
                $this->_data['Error'] = $this->upload->display_errors();
                $this->form_validation->set_message('type_image', $this->upload->display_errors());
                $this->form_validation->set_rules('imagen', 'Imagen', 'type_image');
                $this->form_validation->run();
                return false;
            } else {
                $uploadData = $this->upload->data();
                $configi['image_library'] = 'gd2';
                $configi['source_image'] = $source . $uploadData['file_name'];
                $configi['maintain_ratio'] = FALSE;
                $configi['width'] = $width;
                $configi['height'] = $height;

                $this->load->library('image_lib', $configi);
                $this->image_lib->resize();
                return $uploadData;
            }
        } else {
            $this->form_validation->set_rules('imagen', 'Imagen', 'required');
            $this->form_validation->run();
            return false;
        }

        return "";
    }

}

?>

<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _contactar extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_contactar_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['contactar'] = $this->cms_contactar_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['contactar'] = $this->cms_contactar_model->getContactar($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }

    function delete() {
        $this->cms_contactar_model->deleteContactar($this->uri->segment(4));
        redirect('cms/contactar/index/1', 'refresh');
    }

    function guardarContactar() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $sourceBig = './uploads/front/contactenos/';
        $width = 424;
        $height = 322;
        $nameImagenForm = 'imagen';
        $uploadData = $this->uploadImage($nameImagenForm, $sourceBig, $width, $height);

        if ($uploadData == false) {
            $this->add();
            return;
        }

        if ($uploadData == "") {
            redirect('cms/contactar/index/1', 'refresh');
        }

        $isSave = $this->cms_contactar_model->addContactar($uploadData['file_name']);

        if ($isSave) {
            redirect('cms/contactar/index/1', 'refresh');
        }
    }

    function editarContactar() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $sourceBig = './uploads/front/contactenos/';
        $width = 424;
        $height = 322;

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

        $this->cms_contactar_model->editContactar($this->uri->segment(4), $fileName);
        redirect('cms/contactar/index/1', 'refresh');
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

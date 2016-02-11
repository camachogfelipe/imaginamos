<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _detalle_servicios extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_detalle_servicios_model');
    }

    function index() {
        $idServicio = $this->uri->segment(5);
        $this->_data['idServicio'] = $idServicio;
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['detalle_servicios'] = $this->cms_detalle_servicios_model->getDetalle_servicios($idServicio);
        $this->build();
    }

    function edit() {
        $idServicio = $this->uri->segment(5);
        $this->_data['idServicio'] = $idServicio;
        $this->_data['detalle_servicios'] = $this->cms_detalle_servicios_model->getDetalle_serviciosById($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $idServicio = $this->uri->segment(4);
        $this->_data['idServicio'] = $idServicio;
        $this->build('add');
    }

    function delete() {
        $idServicio = $this->uri->segment(5);
        $this->_data['idServicio'] = $idServicio;
        $this->cms_detalle_servicios_model->deleteDetalle_servicios($this->uri->segment(4));
        redirect('cms/detalle_servicios/index/1/'.$idServicio, 'refresh');
    }

    function guardarDetalle_servicios() {
        $idServicio = $this->uri->segment(4);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'T&iacute;tulo', 'trim|required');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        $this->form_validation->set_rules('texto_contactenos', 'Texto contactenos', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $sourceBig = './uploads/front/detalle_servicios/';
        $width = 902;
        $height = 208;
        $nameImagenForm = 'imagen';
        $uploadData = $this->uploadImage($nameImagenForm, $sourceBig, $width, $height);

        if ($uploadData == false) {
            $this->add();
            return;
        }

        if ($uploadData == "") {
            redirect('cms/detalle_servicios/index/1', 'refresh');
        }

        $isSave = $this->cms_detalle_servicios_model->addDetalle_servicios($uploadData['file_name'], $idServicio);

        if ($isSave) {
            redirect('cms/detalle_servicios/index/1/'.$idServicio, 'refresh');
        }
    }

    function editarDetalle_servicios() {
        $idServicio = $this->uri->segment(5);
        $this->load->library('form_validation');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'T&iacute;tulo', 'trim|required');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        $this->form_validation->set_rules('texto_contactenos', 'Texto contactenos', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $sourceBig = './uploads/front/detalle_servicios/';
        $width = 902;
        $height = 208;

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

        $this->cms_detalle_servicios_model->editDetalle_servicios($this->uri->segment(4), $idServicio, $fileName);
        redirect('cms/detalle_servicios/index/1/'.$idServicio, 'refresh');
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

<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _nuestros_servicios extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_nuestros_servicios_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['nuestros_servicios'] = $this->cms_nuestros_servicios_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['nuestros_servicios'] = $this->cms_nuestros_servicios_model->getNuestros_servicios($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function addService() {
        redirect('cms/servicios', 'refresh');
    }
    
    function delete() {
        $this->cms_nuestros_servicios_model->deleteNuestros_servicios($this->uri->segment(4));
        redirect('cms/nuestros_servicios/index/1', 'refresh');
    }
    
    function guardarNuestros_servicios() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $isSave = $this->cms_nuestros_servicios_model->addNuestros_servicios(NULL);
        
        if ($isSave) {
            redirect('cms/nuestros_servicios/index/1', 'refresh');
        }
           
    }

    function editarNuestros_servicios() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $this->cms_nuestros_servicios_model->editNuestros_servicios($this->uri->segment(4), NULL);
        redirect('cms/nuestros_servicios/index/1', 'refresh');
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

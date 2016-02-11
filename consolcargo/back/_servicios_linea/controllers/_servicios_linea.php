<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _servicios_linea extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_servicios_linea_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['servicios_linea'] = $this->cms_servicios_linea_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['servicios_linea'] = $this->cms_servicios_linea_model->getServicios_linea($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function addService() {
        redirect('cms/servicios', 'refresh');
    }
    
    function delete() {
        $this->cms_servicios_linea_model->deleteServicios_linea($this->uri->segment(4));
        redirect('cms/servicios_linea/index/1', 'refresh');
    }
    
    function guardarServicios_linea() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $isSave = $this->cms_servicios_linea_model->addServicios_linea(NULL);
        
        if ($isSave) {
            redirect('cms/servicios_linea/index/1', 'refresh');
        }
           
    }

    function editarServicios_linea() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $this->cms_servicios_linea_model->editServicios_linea($this->uri->segment(4), NULL);
        redirect('cms/servicios_linea/index/1', 'refresh');
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

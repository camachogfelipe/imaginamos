<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _redes_sociales extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('_redes_sociales_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['redes_sociales'] = $this->_redes_sociales_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['redes_sociales'] = $this->_redes_sociales_model->getRedes_sociales($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function delete() {
        $this->_redes_sociales_model->deleteRedes_sociales($this->uri->segment(4));
        redirect('cms/redes_sociales/index/1', 'refresh');
    }
    
    
    
    function guardarRedes_sociales() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('facebook', 'Facebook', 'trim|required');
        $this->form_validation->set_rules('twitter', 'Twitter', 'trim|required');
        $this->form_validation->set_rules('youtube', 'Youtube', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $isSave = $this->_redes_sociales_model->addRedes_sociales(NULL);
        
        if ($isSave) {
            redirect('cms/redes_sociales/index/1', 'refresh');
        }
           
    }

    function editarRedes_sociales() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('facebook', 'Facebook', 'trim|required');
        $this->form_validation->set_rules('twitter', 'Twitter', 'trim|required');
        $this->form_validation->set_rules('youtube', 'Youtube', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $this->_redes_sociales_model->editRedes_sociales($this->uri->segment(4), NULL);
        redirect('cms/redes_sociales/index/1', 'refresh');
        
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

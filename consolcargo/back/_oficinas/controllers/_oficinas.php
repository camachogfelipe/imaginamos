<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _oficinas extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_oficinas_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['oficinas'] = $this->cms_oficinas_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['oficinas'] = $this->cms_oficinas_model->getOficinas($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function delete() {
        $this->cms_oficinas_model->deleteOficinas($this->uri->segment(4));
        redirect('cms/oficinas/index/1', 'refresh');
    }
    
    function guardarOficinas() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $isSave = $this->cms_oficinas_model->addOficinas(NULL);
        
        if ($isSave) {
            redirect('cms/oficinas/index/1', 'refresh');
        }
           
    }

    function editarOficinas() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $this->cms_oficinas_model->editOficinas($this->uri->segment(4), NULL);
        redirect('cms/oficinas/index/1', 'refresh');
        
    }
}

?>

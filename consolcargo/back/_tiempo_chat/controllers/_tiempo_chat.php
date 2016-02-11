<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _tiempo_chat extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('_tiempo_chat_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['tiempo_chat'] = $this->_tiempo_chat_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['tiempo_chat'] = $this->_tiempo_chat_model->getTiempo_chat($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function delete() {
        $this->_tiempo_chat_model->deleteTiempo_chat($this->uri->segment(4));
        redirect('cms/tiempo_chat/index/1', 'refresh');
    }
    
    
    
    function guardarTiempo_chat() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('time_chat', 'Tiempo ventana de ayuda', 'trim|required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $isSave = $this->_tiempo_chat_model->addTiempo_chat(NULL);
        
        if ($isSave) {
            redirect('cms/tiempo_chat/index/1', 'refresh');
        }
           
    }

    function editarTiempo_chat() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('time_chat', 'Tiempo ventana de ayuda', 'trim|required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $this->_tiempo_chat_model->editTiempo_chat($this->uri->segment(4), NULL);
        redirect('cms/tiempo_chat/index/1', 'refresh');
        
    }

    
}

?>

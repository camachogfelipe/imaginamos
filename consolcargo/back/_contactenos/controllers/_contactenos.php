<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _contactenos extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_contactenos_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['contactenos'] = $this->cms_contactenos_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['contactenos'] = $this->cms_contactenos_model->getContactenos($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function delete() {
        $this->cms_contactenos_model->deleteContactenos($this->uri->segment(4));
        redirect('cms/contactenos/index/1', 'refresh');
    }
    
    
    
    function guardarContactenos() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required');
        $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $isSave = $this->cms_contactenos_model->addContactenos(NULL);
        
        if ($isSave) {
            redirect('cms/contactenos/index/1', 'refresh');
        }
           
    }

    function editarContactenos() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required');
        $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $this->cms_contactenos_model->editContactenos($this->uri->segment(4), NULL);
        redirect('cms/contactenos/index/1', 'refresh');
        
    }
    
    

    function uploadImage($imagen, $source, $width, $height) {
        $img = $_FILES[$imagen]['name'];

        if (!empty($img)) {
            $config['upload_path'] = $source;
            $config['allowed_types'] = 'gif|jpg|png';
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

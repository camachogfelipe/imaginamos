<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _trm extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_trm_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['trm'] = $this->cms_trm_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['trm'] = $this->cms_trm_model->getTrm($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function delete() {
        $this->cms_trm_model->deleteTrm($this->uri->segment(4));
        redirect('cms/trm/index/1', 'refresh');
    }
    
    
    
    function guardarTrm() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('trm', 'TRM', 'trim|required');
        $this->form_validation->set_rules('color', 'COLOR', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $isSave = $this->cms_trm_model->addTrm(NULL);
        
        if ($isSave) {
            redirect('cms/trm/index/1', 'refresh');
        }
           
    }

    function editarTrm() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('trm', 'TRM', 'trim|required');
				$this->form_validation->set_rules('color', 'COLOR', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $this->cms_trm_model->editTrm($this->uri->segment(4), NULL);
        redirect('cms/trm/index/1', 'refresh');
        
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

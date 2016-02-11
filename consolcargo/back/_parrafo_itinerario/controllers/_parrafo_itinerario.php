<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
class _parrafo_itinerario extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_parrafo_itinerario_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['parrafo_itinerario'] = $this->cms_parrafo_itinerario_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['parrafo_itinerario'] = $this->cms_parrafo_itinerario_model->getParrafo_itinerario($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }
    
    function addService() {
        redirect('cms/parrafo_itinerario', 'refresh');
    }
    
    function delete() {
        $this->cms_parrafo_itinerario_model->deleteParrafo_itinerario($this->uri->segment(4));
        redirect('cms/parrafo_itinerario/index/1', 'refresh');
    }
    
    function guardarParrafo_itinerario() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        
		$archivo = $this->uploadFile('archivo',$sourceBig);
		$archivo1 = $this->uploadFile('archivo1',$sourceBig);
		if ($archivo == false) {
            $this->edit();
            return;
		}
		
		if ($archivo1 == false) {
            $this->edit();
            return;
		}
		
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $isSave = $this->cms_parrafo_itinerario_model->addParrafo_itinerario($archivo, $archivo1);
        
        if ($isSave) {
            redirect('cms/parrafo_itinerario/index/1', 'refresh');
        }
           
    }

    function editarParrafo_itinerario() {
        $this->load->library('form_validation');
		 $sourceBig = './uploads/front/itinerario/';
        
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');
        $archivo = $this->uploadFile('archivo',$sourceBig);
				$archivo1 = $this->uploadFile('archivo1',$sourceBig);
		
				if ($archivo == false) {
								$this->edit();
								return;
				}
				
				if ($archivo1 == false) {
								$this->edit();
								return;
				}

		
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
		
        $this->cms_parrafo_itinerario_model->editParrafo_itinerario($this->uri->segment(4), $sourceBig . $archivo['file_name'], $sourceBig . $archivo1['file_name']);
	
        redirect('cms/parrafo_itinerario/index/1', 'refresh');
    }
    
    

    function uploadFile($imagen, $source) {
        $img = $_FILES[$imagen]['name'];

        if (!empty($img)) {
            $config['upload_path'] = $source;
            $config['allowed_types'] = 'xls|xlsx|pdf';
            $config['max_size'] = '900000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($imagen)) {
                $this->_data['Error'] = $this->upload->display_errors();
                $this->form_validation->set_rules('archivo', 'Archivo', 'required', $this->upload->display_errors());
			    $this->form_validation->run();
                return false;
            } else {
                $uploadData = $this->upload->data();
                return $uploadData;
            }
        } else {
            $this->form_validation->set_rules('archivo', 'Archivo', 'required');
            $this->form_validation->run();
            return false;
        }

        return "";
    }

    
}

?>

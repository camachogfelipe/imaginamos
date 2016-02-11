<?php

/**
 * Description of _enlaces
 *
 * @author Andres Felipe Lopez
 */
class _enlaces extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_enlaces_model');
    }

    function index() {
        $tipo = $this->uri->segment(5);
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['tipo'] = $tipo;
        $this->_data['enlaces'] = $this->cms_enlaces_model->getAllByTipo($tipo);
        $this->build();
    }

    function edit() {
        if($this->input->post('tipo')){
           $tipo = $this->input->post('tipo');
        }else{
           $tipo = $this->uri->segment(5);
        }
        $this->_data['tipo'] = $tipo;
        $this->_data['enlaces'] = $this->cms_enlaces_model->getEnlaces($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        if($this->input->post('tipo')){
           $tipo = $this->input->post('tipo');
        }else{
           $tipo = $this->uri->segment(4);
        }
        $this->_data['tipo'] = $tipo;
        $this->build('add');
    }

    function delete() {
        $tipo = $this->uri->segment(5);
        $this->_data['tipo'] = $tipo;
        $this->cms_enlaces_model->deleteEnlaces($this->uri->segment(4));
        redirect('cms/enlaces/index/1/'.$tipo, 'refresh');
    }

    function guardarEnlaces() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');
        $this->form_validation->set_rules('link', 'Link', 'trim|required');
        $tipo = $this->input->post('tipo');
        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }

        $sourceBig = './uploads/front/enlaces/';
        $width = 40;
        $height = 40;
        
        if ($tipo == 'itinerario' || $tipo == 'enlaces') {
            $width = 188;
            $height = 65;
        }

        if ($tipo == 'enlaces') {
           $pdf = "path_pdf"; 
           $uploadFile = $this->uploadPDF($pdf, $sourceBig);
        }

        $nameImagenForm = 'imagen';
        $uploadData = $this->uploadImage($nameImagenForm, $sourceBig, $width, $height);

        if ($uploadData == false) {
            $this->add();
            return;
        }

        if ($uploadData == "") {
            redirect('cms/enlaces/index/1/'.$tipo, 'refresh');
        }

        $isSave = $this->cms_enlaces_model->addEnlaces($uploadData['file_name'],$uploadFile['file_name'] );

        if ($isSave) {
            redirect('cms/enlaces/index/1/'.$tipo, 'refresh');
        }
    }

    function editarEnlaces() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');
        $this->form_validation->set_rules('link', 'Link', 'trim|required');
        $tipo = $this->input->post('tipo');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }
        $sourceBig = './uploads/front/enlaces/';
        $width = 40;
        $height = 40;
        
        if ($tipo == 'itinerario' || $tipo == 'enlaces') {
            $width = 188;
            $height = 65;
        }
      
       if ($tipo == 'enlaces') {
           $pdf = "path_pdf"; 
           $uploadFile = $this->uploadPDF($pdf, $sourceBig);
        }

        $nameFileForm = 'path_pdf';
        $pdf = $_FILES[$nameFileForm]['name'];
        $fileNamePDF = NULL;
        if ($pdf != "") {
            $uploadDataPDF = $this->uploadPDF($nameFileForm, $sourceBig);
            $fileNamePDF = $uploadDataPDF['file_name'];

            if ($fileNamePDF == false) {
                $this->edit();
                return;
            }
        }


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

        $this->cms_enlaces_model->editEnlaces($this->uri->segment(4), $fileName, $fileNamePDF);
        redirect('cms/enlaces/index/1/'.$tipo, 'refresh');
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


     function uploadPDF($pdf, $source) {
        $img = $_FILES[$pdf]['name'];

        if (!empty($img)) {
            $config['upload_path'] = $source;
            $config['allowed_types'] = 'pdf|xls|jpg|png|docx|xlxs';
            $config['max_size'] = '20000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($pdf)) {
                $this->_data['Error'] = $this->upload->display_errors();
                 return false;
            } else {
                $uploadData = $this->upload->data();
                return $uploadData;
            }
        } else {
            return false;
        }

        return NULL;
    }

}

?>

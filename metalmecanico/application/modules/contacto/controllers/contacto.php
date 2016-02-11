<?php

class Contacto extends MX_Controller {
    
    var $gallery_path;
    //------------------------------ Verifica que halla session iniciada

    function __construct() {
        parent::__construct();
        $this->gallery_path = realpath(APPPATH . "../application/modules/contacto/assets/images");
        if ($this->session->userdata('is_logged_in') != true) {
            $datos_plantilla["functions"] = $this->load->view('cms/general_includes/cms_functions', null, true);
            $this->load->view('cms/cms_login', $datos_plantilla);
        }
    }

    //------------------------------ Se carga vista principal list

    function index($return = '') {

        $returns['return'] = $return;

        $this->load->model('contacto_model');

        if ($query = $this->contacto_model->getRecords()) {
            $template_date['records'] = $query;            
        } else {
            $template_date['records'] = '';            
        }

        # Inicio carga estructura principal del CMS
        $this->load->model('cms/cms_model');
        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();

        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
        # Fin carga estructura principal del CMS

        $this->load->view('contacto_view', $template_date);
    }

    //------------------------------ Se carga vista de edicion

    function edit($return = '') {

        $returns['return'] = $return;

        $this->load->model('contacto_model');

        if ($query = $this->contacto_model->getRecord()) {
            $template_date['record'] = $query;
        }

        # Inicio carga estructura principal del CMS
        $this->load->model('cms/cms_model');
        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();

        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
        # Fin carga estructura principal del CMS

        $this->load->view('contacto_edit', $template_date);
    }    

    //------------------------------ Funcion para actualizar registro

    function update() {

        $this->load->model('contacto_model');


        if ($this->input->post('email') == '') {
            $msg = 'erRequired';
            $this->edit($msg);
        } else {

            $contacto = array(
                'email' => $this->input->post('email')
            );
            
            $config = array(
            'allowed_types' => 'gif|jpg|png|jpeg',
            'upload_path' => $this->gallery_path,
            'max_size' => 250000
        );

        $this->load->library('Upload', $config);
        
        if ($this->upload->do_upload()) {
            $data = array('upload_data' => $this->upload->data());
            $name = $data['upload_data']['file_name'];
            $contacto['imagen'] = $name;
        }


            $this->contacto_model->update_record($contacto);
            $this->index('ok');
        }
    }    

}
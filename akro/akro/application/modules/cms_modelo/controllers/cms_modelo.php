<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////


class Cms_modelo extends MX_Controller {

  var $gallery_path;

  //------------------------------ Verifica que halla session iniciada

  function __construct() {
    parent::__construct();
    $this->gallery_path = realpath(APPPATH . "../application/modules/cms_modelo/assets/images");
    if ($this->session->userdata('is_logged_in') != true) {
      $datos_plantilla["functions"] = $this->load->view('cms/general_includes/cms_functions', null, true);
      $this->load->view('cms/cms_login', $datos_plantilla);
    }
  }

  //------------------------------ Se carga vista principal list

  function index($return = '') {

    $returns['return'] = $return;

    $this->load->model('cms_modelo_model');

    if ($query = $this->cms_modelo_model->getRecords()) {
      $template_date['record'] = $query;      
    } else {
      $template_date['record'] = '';      
    }

    # Inicio carga estructura principal del CMS
    $this->load->model('cms/cms_model');
    $lista_menu['menu'] = $this->cms_model->menuIndex();
    $lista_menu['submenu'] = $this->cms_model->subMenuIndex();

    $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
    $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
    $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
    # Fin carga estructura principal del CMS

    $this->load->view('cms_modelo_edit', $template_date);
  }

  //------------------------------ Funcion para actualizar registro

  function update() {

    $is_logged = $this->session->userdata('is_logged_in');

    if ($is_logged === TRUE) {

      $this->load->model('cms_modelo_model');


      if ($this->input->post('texto_spa') == '' || $this->input->post('texto_eng') == '') {
        $msg = 'erRequired';
        $this->edit($msg);
      } else {
        
        $modelo = array(
            'texto_spa' => $this->input->post('texto_spa'),
            'texto_eng' => $this->input->post('texto_eng')
        );

        $config = array(
            'allowed_types' => 'gif|jpg|png|jpeg|pdf',
            'upload_path' => $this->gallery_path,
            'max_size' => 250000
        );

        $this->load->library('Upload', $config);

        if ($this->upload->do_upload()) {
          $data = array('upload_data' => $this->upload->data());
          $name = $data['upload_data']['file_name'];
          $modelo['imagen'] = $name;
        }

        $return = $this->cms_modelo_model->update_record($modelo);
        if ($return) {
          $this->index('ok');
        } else {
          $this->add('erSizeImg');
        }
      }
    } else {
      redirect('cms', 'refresh');
    }
  } 

  //------------------------------ Funcion para eliminar registro

  function delete() {

    $this->load->model('cms_modelo_model');
    $this->cms_modelo_model->delete_record();
    $this->index('ok');
  }

}
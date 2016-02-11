<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////


class Bienvenida extends MX_Controller {

  var $gallery_path;

  //------------------------------ Verifica que halla session iniciada

  function __construct() {
    parent::__construct();
    $this->gallery_path = realpath(APPPATH . "../application/modules/bienvenida/assets/images");
    if ($this->session->userdata('is_logged_in') != true) {
      $datos_plantilla["functions"] = $this->load->view('cms/general_includes/cms_functions', null, true);
      $this->load->view('cms/cms_login', $datos_plantilla);
    }
  }

  //------------------------------ Se carga vista principal list

  function index($return = '') {

    $returns['return'] = $return;

    $this->load->model('bienvenida_model');

    if ($query = $this->bienvenida_model->getRecords()) {
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

    $this->load->view('bienvenida_edit', $template_date);
  }

  //------------------------------ Funcion para actualizar registro

  function update() {

    $is_logged = $this->session->userdata('is_logged_in');

    if ($is_logged === TRUE) {

      $this->load->model('bienvenida_model');


      if ($this->input->post('texto_spa') == '' || $this->input->post('texto_eng') == '') {
        $msg = 'erRequired';
        $this->edit($msg);
      } else {

        $bienvenida = array(
            'texto_spa' => $this->input->post('texto_spa'),
            'texto_eng' => $this->input->post('texto_eng')
        );

        $return = $this->bienvenida_model->update_record($this->input->post('id'), $bienvenida);
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

}
<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////


class Cms_factores extends MX_Controller {

  var $gallery_path;

  //------------------------------ Verifica que halla session iniciada

  function __construct() {
    parent::__construct();
    $this->gallery_path = realpath(APPPATH . "../application/modules/cms_factores/assets/images");
    if ($this->session->userdata('is_logged_in') != true) {
      $datos_plantilla["functions"] = $this->load->view('cms/general_includes/cms_functions', null, true);
      $this->load->view('cms/cms_login', $datos_plantilla);
    }
  }

  //------------------------------ Se carga vista principal list

  function index($return = '') {

    $returns['return'] = $return;
    
    $this->load->model('cms_factores_model');
    
    if ($query = $this->cms_factores_model->getRecords()) {
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

    $this->load->view('cms_factores_view', $template_date);
  }

  //------------------------------ Se carga vista de edicion

  function edit($return = '') {

    $returns['return'] = $return;

    $this->load->model('cms_factores_model');

    if ($query = $this->cms_factores_model->getRecord()) {
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

    $this->load->view('cms_factores_edit', $template_date);
  }

  //------------------------------ Se carga vista de agregar

  function add($return = '') {

    $returns['return'] = $return;        
    
    $this->load->model('cms_factores_model');        

    # Inicio carga estructura principal del CMS
    $this->load->model('cms/cms_model');
    $lista_menu['menu'] = $this->cms_model->menuIndex();
    $lista_menu['submenu'] = $this->cms_model->subMenuIndex();

    $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
    $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
    $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
    # Fin carga estructura principal del CMS

    $this->load->view('cms_factores_new', $template_date);
  }

  //------------------------------ Funcion para actualizar registro

  function update() {

    $is_logged = $this->session->userdata('is_logged_in');

    if ($is_logged === TRUE) {

      $this->load->model('cms_factores_model');


      if ($this->input->post('titulo_spa') == '' || $this->input->post('titulo_eng') == '' || $this->input->post('texto_spa') == '' || $this->input->post('texto_eng') == '') {
        $msg = 'erRequired';
        $this->edit($msg);
      } else {

        $factores = array(
            'titulo_spa' => $this->input->post('titulo_spa'),
            'titulo_eng' => $this->input->post('titulo_eng'),
            'texto_spa' => $this->input->post('texto_spa'),
            'texto_eng' => $this->input->post('texto_eng')
        );

        $return = $this->cms_factores_model->update_record($this->input->post('id'), $factores);
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

  //------------------------------ Funcion para agregar nuevo registro

  function new_record() {    
    $this->form_validation->set_rules('titulo_spa', 'titulo_spa', 'required');
    $this->form_validation->set_rules('titulo_eng', 'titulo_eng', 'required');
    $this->form_validation->set_rules('texto_spa', 'texto_spa', 'required');
    $this->form_validation->set_rules('texto_eng', 'texto_eng', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->add('erRequired');
    } else {

      $this->load->model('cms_factores_model');

      $factores = array(
            'titulo_spa' => $this->input->post('titulo_spa'),
            'titulo_eng' => $this->input->post('titulo_eng'),
            'texto_spa' => $this->input->post('texto_spa'),
            'texto_eng' => $this->input->post('texto_eng')
        );

      $result = $this->cms_factores_model->add_record($factores);

      if ($result) {
        $this->index('ok');
      } else {
        $this->index('erRequired');
      }
    }
  }

  //------------------------------ Funcion para eliminar registro

  function delete() {

    $this->load->model('cms_factores_model');
    $this->cms_factores_model->delete_record();
    $this->index('ok');
  }  

}
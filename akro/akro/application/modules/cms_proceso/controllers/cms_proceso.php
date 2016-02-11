<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////


class Cms_proceso extends MX_Controller {

  var $gallery_path;

  //------------------------------ Verifica que halla session iniciada

  function __construct() {
    parent::__construct();
    $this->gallery_path = realpath(APPPATH . "../application/modules/cms_proceso/assets/images");
    if ($this->session->userdata('is_logged_in') != true) {
      $datos_plantilla["functions"] = $this->load->view('cms/general_includes/cms_functions', null, true);
      $this->load->view('cms/cms_login', $datos_plantilla);
    }
  }

  //------------------------------ Se carga vista principal list

  function index($return = '') {

    $returns['return'] = $return;

    $this->load->model('cms_proceso_model');

    if ($query = $this->cms_proceso_model->getRecords()) {
      $template_date['records'] = $query;
      $template_date['num'] = $this->db->query('select * from proceso')->num_rows();
    } else {
      $template_date['records'] = '';
      $template_date['num'] = 0;
    }

    # Inicio carga estructura principal del CMS
    $this->load->model('cms/cms_model');
    $lista_menu['menu'] = $this->cms_model->menuIndex();
    $lista_menu['submenu'] = $this->cms_model->subMenuIndex();

    $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
    $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
    $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
    # Fin carga estructura principal del CMS

    $this->load->view('cms_proceso_view', $template_date);
  }

  //------------------------------ Se carga vista de edicion

  function edit($return = '') {

    $returns['return'] = $return;

    $this->load->model('cms_proceso_model');

    if ($query = $this->cms_proceso_model->getRecord()) {
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

    $this->load->view('cms_proceso_edit', $template_date);
  }

  //------------------------------ Se carga vista de agregar

  function add($return = '') {

    $returns['return'] = $return;

    $this->load->model('cms_proceso_model');

    # Inicio carga estructura principal del CMS
    $this->load->model('cms/cms_model');
    $lista_menu['menu'] = $this->cms_model->menuIndex();
    $lista_menu['submenu'] = $this->cms_model->subMenuIndex();

    $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
    $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
    $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
    # Fin carga estructura principal del CMS

    $this->load->view('cms_proceso_new', $template_date);
  }

  //------------------------------ Funcion para actualizar registro

  function update() {

    $is_logged = $this->session->userdata('is_logged_in');

    if ($is_logged === TRUE) {

      $this->load->model('cms_proceso_model');

        $proceso = array(
            'nombre_spa' => $this->input->post('nombre_spa'),
            'nombre_eng' => $this->input->post('nombre_eng'),
            'texto_spa' => $this->input->post('descripcion_spa'),
            'texto_eng' => $this->input->post('descripcion_eng')
      );

        $return = $this->cms_proceso_model->update_record($this->input->post('id'), $proceso);
        if ($return) {
          $this->index('ok');
        } else {
          $this->add('erSizeImg');
        }
      
    } else {
      redirect('cms', 'refresh');
    }
  }

  //------------------------------ Funcion para agregar nuevo registro

  function new_record() {

      $this->load->model('cms_proceso_model');

      $proceso = array(
            'nombre_spa' => $this->input->post('nombre_spa'),
            'nombre_eng' => $this->input->post('nombre_eng'),
            'texto_spa' => $this->input->post('descripcion_spa'),
            'texto_eng' => $this->input->post('descripcion_eng')
      );

      $result = $this->cms_proceso_model->add_record($proceso);

      if ($result) {
        $this->index('ok');
      } else {
        $this->index('erRequired');
      }
    
  }

  //------------------------------ Funcion para eliminar registro

  function delete() {

    $this->load->model('cms_proceso_model');
    $this->cms_proceso_model->delete_record();
    $this->index('ok');
  }

}
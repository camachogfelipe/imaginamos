<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////


class Cms_hacemos extends MX_Controller {

  var $gallery_path;

  //------------------------------ Verifica que halla session iniciada

  function __construct() {
    parent::__construct();
    $this->gallery_path = realpath(APPPATH . "../application/modules/cms_hacemos/assets/images");
    if ($this->session->userdata('is_logged_in') != true) {
      $datos_plantilla["functions"] = $this->load->view('cms/general_includes/cms_functions', null, true);
      $this->load->view('cms/cms_login', $datos_plantilla);
    }
  }

  //------------------------------ Se carga vista principal list

  function index($return = '') {

    $returns['return'] = $return;    
    
    $this->load->model('cms_hacemos_model');        
    
    if ($query = $this->cms_hacemos_model->getRecords()) {
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

    $this->load->view('cms_hacemos_view', $template_date);
  }

  //------------------------------ Se carga vista de edicion

  function edit($return = '') {

    $returns['return'] = $return;

    $this->load->model('cms_hacemos_model');

    if ($query = $this->cms_hacemos_model->getRecord()) {
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

    $this->load->view('cms_hacemos_edit', $template_date);
  }

  //------------------------------ Se carga vista de agregar

  function add($return = '') {

    $returns['return'] = $return;        
    
    $this->load->model('cms_hacemos_model');        

    # Inicio carga estructura principal del CMS
    $this->load->model('cms/cms_model');
    $lista_menu['menu'] = $this->cms_model->menuIndex();
    $lista_menu['submenu'] = $this->cms_model->subMenuIndex();

    $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
    $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
    $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
    # Fin carga estructura principal del CMS

    $this->load->view('cms_hacemos_new', $template_date);
  }

  //------------------------------ Funcion para actualizar registro

  function update() {

    $is_logged = $this->session->userdata('is_logged_in');

    if ($is_logged === TRUE) {

      $this->load->model('cms_hacemos_model');


      if ($this->input->post('descripcion_corta_spa') == '' || $this->input->post('descripcion_corta_eng') == '' || $this->input->post('descripcion_detallada_spa') == '' || $this->input->post('descripcion_detallada_eng') == '') {
        $msg = 'erRequired';
        $this->edit($msg);
      } else {

        $hacemos = array(
            'descripcion_corta_spa' => $this->input->post('descripcion_corta_spa'),
            'descripcion_corta_eng' => $this->input->post('descripcion_corta_eng'),
            'descripcion_detallada_spa' => $this->input->post('descripcion_detallada_spa'),
            'descripcion_detallada_eng' => $this->input->post('descripcion_detallada_eng')
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
          $hacemos['imagen_principal'] = $name;
        }

        $return = $this->cms_hacemos_model->update_record($this->input->post('id'), $hacemos);
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
    $this->form_validation->set_rules('descripcion_corta_spa', 'descripcion_corta_spa', 'required');
    $this->form_validation->set_rules('descripcion_corta_spa', 'descripcion_corta_eng', 'required');
    $this->form_validation->set_rules('descripcion_detallada_spa', 'descripcion_detallada_spa', 'required');
    $this->form_validation->set_rules('descripcion_detallada_spa', 'descripcion_detallada_eng', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->add('erRequired');
    } else {

      $this->load->model('cms_hacemos_model');

      $hacemos = array(
            'descripcion_corta_spa' => $this->input->post('descripcion_corta_spa'),
            'descripcion_corta_eng' => $this->input->post('descripcion_corta_eng'),
            'descripcion_detallada_spa' => $this->input->post('descripcion_detallada_spa'),
            'descripcion_detallada_eng' => $this->input->post('descripcion_detallada_eng')
        );

      $config = array(
          'allowed_types' => 'jpg|jpeg|png|gif|pdf',
          'upload_path' => $this->gallery_path,
          'max_size' => 250000
      );

      $this->load->library('Upload', $config);

      if ($this->upload->do_upload()) {
        $data = array('upload_data' => $this->upload->data());
        $name = $data['upload_data']['file_name'];
        $hacemos['imagen_principal'] = $name;
      } else {
        return false;
      }            

      $result = $this->cms_hacemos_model->add_record($hacemos);

      if ($result) {
        $this->index('ok');
      } else {
        $this->index('erRequired');
      }
    }
  }

  //------------------------------ Funcion para eliminar registro

  function delete() {

    $this->load->model('cms_hacemos_model');
    $this->cms_hacemos_model->delete_record();
    $this->index('ok');
  }  

}
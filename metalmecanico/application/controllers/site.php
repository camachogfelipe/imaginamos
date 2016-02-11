<?php

////////////////////////////////
//@autor: Didier Neira
//didier.neira@imaginamos.com.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////


class Site extends CI_Controller {

  function index() {

    $this->load->model('site_model');

    if ($query = $this->site_model->getSlider()) {
      $template_date['slider'] = $query;
    } else {
      $template_date['slider'] = '';
    }
    if ($query = $this->site_model->getDestacados()) {
      $template_date['destacados'] = $query;
    } else {
      $template_date['destacados'] = '';
    }
    
    //------------------------------ Se carga la vista
    $this->load->view('index', $template_date);
  }

  function quienes_somos() {

    $this->load->model('site_model');

     if ($query = $this->site_model->getQuienes()) {
      $template_date['quienes'] = $query;
    } else {
      $template_date['quienes'] = '';
    }
    //------------------------------ Se carga la vista
    $this->load->view('quienes', $template_date);
  }

  function historia() {
    $this->load->model('site_model');
    if ($query = $this->site_model->getInternaQuienes(1)) {
      $template_date['quienes'] = $query;
    } else {
      $template_date['quienes'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('historia', $template_date);
  }
  
  function mision() {
    $this->load->model('site_model');
    $this->load->model('site_model');
    if ($query = $this->site_model->getInternaQuienes(2)) {
      $template_date['quienes'] = $query;
    } else {
      $template_date['quienes'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('mision', $template_date);
  }
  
  function politicas() {
    $this->load->model('site_model');
    $this->load->model('site_model');
    if ($query = $this->site_model->getInternaQuienes(3)) {
      $template_date['quienes'] = $query;
    } else {
      $template_date['quienes'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('politicas', $template_date);
  }
  
  function front_alcance() {
    $this->load->model('site_model');
    
      if ($query = $this->site_model->getAlcances()) {
      $template_date['alcance'] = $query;
    } else {
      $template_date['alcance'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('alcance', $template_date);
  }
  
  function alcance_detalle($id) {


    $this->load->model('site_model');
    
    if ($query = $this->site_model->getAlcance($id)) {
      $template_date['alcance'] = $query;
    } else {
      $template_date['alcance'] = '';
    }

//------------------------------ Se carga la vista
    $this->load->view('alcance_sub', $template_date);
  }
  
  function front_proyectos() {
    $this->load->model('site_model');
     if ($query = $this->site_model->getProyectos()) {
      $template_date['proyectos'] = $query;
    } else {
      $template_date['proyectos'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('proyectos', $template_date);
  }
  
  function proyectos_detalle($id) {
    $this->load->model('site_model');
    if ($query = $this->site_model->getProyecto($id)) {
      $template_date['proyecto'] = $query;
    } else {
      $template_date['proyecto'] = '';
    }
    if ($query = $this->site_model->getImagenesProyecto($id)) {
      $template_date['imagenes'] = $query;
    } else {
      $template_date['imagenes'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('proyectos_sub', $template_date);
  }
  
  function front_clientes() {
    $this->load->model('site_model');
    if ($query = $this->site_model->getClientes()) {
      $template_date['clientes'] = $query;
    } else {
      $template_date['clientes'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('clientes', $template_date);
  }
  
  function front_noticias() {
    $this->load->model('site_model');
    if ($query = $this->site_model->getNoticias()) {
      $template_date['noticias'] = $query;
    } else {
      $template_date['noticias'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('noticias', $template_date);
  }
  
  function contactenos() {
    $this->load->model('site_model');
    if ($query = $this->site_model->getContacto()) {
      $template_date['contacto'] = $query;
    } else {
      $template_date['contacto'] = '';
    }
//------------------------------ Se carga la vista
    $this->load->view('contactenos', $template_date);
  }
  
    
    function enviar_contacto(){
        $config = array(
            'mailtype' => 'html'
        );
        $this->load->model('site_model');
        
        $parameters['name'] = $this->input->post('nombre');
        $parameters['email'] = $this->input->post('correo');
        $parameters['phone'] = $this->input->post('telefono');
        $parameters['subject'] = $this->input->post('asunto');
        $parameters['message'] = $this->input->post('mensaje');

        $contacto = $this->site_model->getContacto();
        $destino = $contacto[0]->email;

        $msj = $this->load->view('correo', $parameters, true);

        $this->load->library('email', $config);
        $this->email->from('didier.neira@imaginamos.com.co', 'Metalmecánico');
        $correo = $destino;
        $this->email->to($correo);
        $this->email->subject('Centro de Contacto');
        $this->email->message($msj);
        if($this->email->send()){
            redirect('site/contactenos/ok');
        }
        else{
            echo $this->email->print_debugger();
        }
    }

}

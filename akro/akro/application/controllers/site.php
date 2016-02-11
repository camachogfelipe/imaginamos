<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////


class Site extends CI_Controller {

  function index() {
    
    //------------------------------ Se carga la vista
    $this->load->view('index');
  }
  

}
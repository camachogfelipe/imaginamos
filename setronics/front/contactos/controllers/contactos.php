<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Contactos extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
       $redes = new\ redes();
        $this->_data['datos'] = $redes->get_redes();

        $contacto = new\ contacto();
        $this->_data['data_contact'] = $contacto->get_by_id(1);

        $departamentos = new\ departamentos();
        $this->_data['deptos'] = $departamentos->get_deptos();

        //  $banners = new\ banners();
        $this->_data['dat_ban'] = array(); //$banners->get_banner();
    
        return $this->build('contacto.php');
    }
    
    
      public function send_email() {
        $this->load->library('email');

        $this->email->clear();

        $this->_data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password
        );
        $html = $this->view('email/template_mail');

        $this->email->from('cms@imaginamos.com', 'CMS Imaginamos');
        $this->email->to($email);

        $this->email->subject('Hola ' . $username . ', estos son los datos de su nueva cuenta');
        $this->email->message($html);


        return $this->email->send();
    }


    // ----------------------------------------------------------------------
   
}

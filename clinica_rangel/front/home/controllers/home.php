<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Elbert Tous
 */
class Home extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', '- Clínica Rangel Pereira -'); 
    }

    // ----------------------------------------------------------------------

    public function index() {
    
        $id_pag = $this->page_id('home'); 
        
        $barner = new barner_principal(); 
        $this->_data['barner'] = $barner->join_related('imagen')->join_related('imagen1')->get()->limit(5); 
     
        $destacado = new destacado(); 
        $this->_data['destacado'] =  $destacado->join_related('imagen')->get_by_pagina_id($id_pag)->limit(2); 
        
        $contenedor = new contenedor(); 
        $this->_data['contenedor'] =  $contenedor->join_related('imagen')->get_by_pagina_id($id_pag); 
        
        $text = new texto_principal(); 
        $this->_data['text_page'] = $text->get_by_pagina_id($id_pag)->limit(1); 
        
        $video = new video(); 
        $this->_data['video'] = $video->join_related('imagen')->get_by_pagina_id($id_pag)->limit(1); 
        
        
        return $this->build('index');
    }
    
    public function page_id($page){
        $pag = new pagina(); 
        $pag->get_by_titulo($page); 
        if($pag->exists())
          return $pag->id; 
        else
          return false; 
    }
    

    public function add() {
        $securify = $this->load->library('securify');

        $password = $securify($this->input->post('cli_pass_usu'));
        $username = $this->_post('cli_id_usu');
        $email = $this->_post('cli_ema');

        
        $post = array(
            "first_name" => $this->input->post('cli_nom'),
            "last_name" => $this->input->post('cli_ape'),
            "phone" => $this->input->post('cli_tel'),
         //   "email" => $this->input->post('cli_ema'),
            "company" => $this->input->post('cli_com'),
          //  "tipo_usuario" => $this->input->post('cli_tip'),
            "departamento_id" => $this->input->post('cli_dep'),
            //"ciudad" => $this->input->post('cli_ciu'),
          //  "username" => $this->input->post('cli_id_usu'),
        //    "password" => md5($this->input->post('cli_pass_usu')),
            "ip_address" => $_SERVER['REMOTE_ADDR']
        );
        
        $grupos = new Groups();
        $group = 'cliente';

        $save = false;

        if ($this->_post('tipo_usuario') == 1 ) {
            $group = 'cliente';
        }

        if ($this->_post('tipo_usuario') == 2 ) {
            $group = 'proveedor';
        }
        
        $grupos->get_by_name($group);

        if (!$this->ACL->email_check($email)) {
            $save = (bool) $this->ACL->register($username, $password, $email, $post, (array) $grupos->id);
        } else {
            $user = new \User;
            $user->get_by_email($email);

            $save = (bool) $this->ACL->add_to_group($grupos->id, $user->id);
        }

        if ($save) {
            $this->set_alert_session('Se ha creado el usuario','success');
            $this->_send_email($username, $email, $password);
        } else {
            $errors = 'Error al crear el usuario';

            if ($this->ACL->errors()) {
                $errors = $this->ACL->errors();
            }
            $this->set_alert_session($errors,'error');
        }

        redirect('home');
    }

    // ----------------------------------------------------------------------

    public function _send_email($username, $email, $password) {
        $this->load->library('email');

        $this->email->clear();

        $this->_data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password
        );
        $html = $this->view('emails/user/nuevo_usuario');

        $this->email->from('cms@imaginamos.com', 'CMS Imaginamos');
        $this->email->to($email);

        $this->email->subject('Hola ' . $username . ', estos son los datos de su nueva cuenta');
        $this->email->message($html);


        return $this->email->send();
    }


}
 
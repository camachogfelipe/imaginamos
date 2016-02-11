<?php

///////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
///////////////////////////////


class Site extends CI_Controller {

    function index() {
        $this->load->view('index');
    }

    function contacto($return = '') {

        if ($return != '') {
            $contenido['error'] = $return;
        } else {
            $contenido['error'] = '';
        }

        $this->load->view('contacto',$contenido);
    }

    function login() {
        $this->load->view('login');
    }

    function mail() {
        $this->load->view('mail');
    }

    function terminos() {
        $this->load->view('terminos');
    }

    function mailContacto() {

        
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {

            $this->contacto('er');
        } else {                       

            // ------- INICIO ENVIO DE CORRERO

            $config = array(
                'mailtype' => 'html'
            );

            $parameters['nombre'] = $this->input->post('nombre');
            $parameters['empresa'] = $this->input->post('empresa');
            $parameters['cargo'] = $this->input->post('cargo');
            $parameters['email'] = $this->input->post('email');
            $parameters['telefono'] = $this->input->post('telefono');
            $parameters['mensaje'] = $this->input->post('mensaje');
            $parameters['noticia'] = $this->input->post('noticia');


            $msj = $this->load->view('plantilla_mail_contacto', $parameters, true);
			

            $this->load->library('email', $config);
            $this->email->from($parameters['email'] , 'CMS | imaginamos.com');
            //$for = array('alejandro.zamorano@imaginamos.com');
			$for = array('info@ventrevista.es,mdilucca@ventrevista.es');
            $this->email->to($for);

            $this->email->subject('Notificaciones de contacto');
            $this->email->message($msj);
            $this->email->send();			
			
			
			$contenido['error'] = '';
			$this->load->view('contacto',$contenido);
            // ------- FIN ENVIO DE CORRERO
        }
    }
	
	
	 function mailContacto2() {

        
        $this->form_validation->set_rules('correo', 'correo', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {

            $this->contacto('er');
        } else {                       

            // ------- INICIO ENVIO DE CORRERO

            $config = array(
                'mailtype' => 'html'
            );

            $parameters['correo'] = $this->input->post('correo');
            $parameters['correos'] = $this->input->post('correos');
            $parameters['asunto'] = $this->input->post('asunto');
            $parameters['mensaje'] = $this->input->post('mensaje');


            $msj = $this->load->view('plantilla_mail_contacto2', $parameters, true);
			

            $this->load->library('email', $config);
            $this->email->from($parameters['correo'], 'CMS | imaginamos.com');
            $for = array($parameters['correos']);
            $this->email->to($for);

            $this->email->subject($parameters['asunto']);
            $this->email->message($msj);
            $this->email->send();			
			
			
			
			$this->load->view('mail');
            // ------- FIN ENVIO DE CORRERO
        }
    }
	

	function mailPruebaGratis() {

        
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {

            $this->contacto('er');
        } else {                       

            // ------- INICIO ENVIO DE CORRERO

            $config = array(
                'mailtype' => 'html'
            );

            $parameters['nombre'] = $this->input->post('nombre');
            $parameters['empresa'] = $this->input->post('empresa');
            $parameters['cargo'] = $this->input->post('cargo');
            $parameters['email'] = $this->input->post('email');
            $parameters['telefono'] = $this->input->post('telefono');

            $msj = $this->load->view('plantilla_mail_gratis', $parameters, true);


            $this->load->library('email', $config);
            $this->email->from($parameters['email'], 'CMS | imaginamos.com');
            //$for = array('alejandro.zamorano@imaginamos.com');
			$for = array('info@ventrevista.es,mdilucca@ventrevista.es');
            $this->email->to($for);

            $this->email->subject('Pruébalo Gratis Desde Página Web');
            $this->email->message($msj);
            $this->email->send();
			
			  $this->load->view('index');
            // ------- FIN ENVIO DE CORRERO
        }
    }
	
	function conectar() {
		
		
		
		//echo $this->input->post('usuario');
		//echo $this->input->post('clave');

			$data_hidden = array(
            'login' => $this->input->post('usuario'),
            'clave' => $this->input->post('clave'),
			'leng' => $this->input->post('leng'),
			'DATOS' => "Envio_Forma",
            'url_respuesta' => site_url('entrar.php')
			);

			return $this->load->view('ventrevista', array(
						'data_hidden' => $data_hidden
					));

			

		// exit();
		 
	}

}


<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050006
     */

                        

class Modal_contacto extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		return $this->build();
	}
	
	public function send() {
		$nombre = $this->input->post('nombre');
		$email = $this->input->post('email');
		$mensaje = $this->input->post('mensaje');
		if(empty($nombre) || empty($email) || empty($mensaje)) :
			$this->index();
		else :
			$this->load->library('email');

			$this->email->from($email, $nombre);
			$this->email->to('someone@example.com');
			
			$this->email->subject('contacto desde la página web');
			$this->email->message($mensaje);	
			
			if($this->email->send()) echo "Su mensaje ha sido enviado satisfactoriamente.";
			else echo "Error al enviar el mensaje. Por favor intentelo de nuevo.";
		endif;
	}

}
?>
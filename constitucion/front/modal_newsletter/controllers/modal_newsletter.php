<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050006
     */

                        

class Modal_newsletter extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		return $this->buildajax();
	}
	
	public function send() {
		$email = $this->input->post('email');
		$nombre = $this->input->post('nombre');
		if(!empty($email)) :
			$this->load->model('newsletter');
			$obj = new newsletter();
			if(empty($nombre)) $obj->nombre = "_";
			else $obj->cms_nombre = $nombre;
			$obj->cms_email = $email;
			if($obj->save())
				echo "Se ha registrado satisfactoriamente en el boletin de Constitucionaldia.com";
			else
				echo "No se ha podido registrar en el boletin de Constitucionaldia.com. Por favor intentelo nuevamente.";
		else :
			echo "Email no valido";
		endif;
	}

}
?>
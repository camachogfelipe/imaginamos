<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 2-050049
 */
class Contactenos extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (count($_POST) > 0) {
            $this->enviar_email();
            $this->_data['email_send'] = true;
        }
        $this->_data['email_send'] = false;
        return $this->build();
    }

    public function enviar_email() {
        $message = '<html><body>';
        $message .= '<img src="'.  base_url().'assests/img/header-logo.png" alt="Logotipo" />';
        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($_POST['nombre']) . "</td></tr>";
        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
        $message .= "<tr><td><strong>Telefono Fijo:</strong> </td><td>" . strip_tags($_POST['telefono_fijo']) . "</td></tr>";
        $message .= "<tr><td><strong>Telefono Celular:</strong> </td><td>" . strip_tags($_POST['telefono_celular']) . "</td></tr>";
        $message .= "<tr><td><strong>Comentarios:</strong> </td><td>" . htmlentities($_POST['comentarios']) . "</td></tr>";
        $message .= "</table>";
        $message .= "</body></html>";

        $this->load->library('email');
        $this->email->from(strip_tags($_POST['email']), strip_tags($_POST['nombre']));
				$this->email->to(SITEEMAIL);
				$this->email->subject('Contacto (Modo Store)');
        $this->email->message($message);
        $this->email->send();
    }
		
		function newsletter() {
			$message = '<html><body>';
			$message .= '<img src="'.  base_url().'assests/img/header-logo.png" alt="Logotipo" />';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($_POST['nombre']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			$message .= "<tr><td><strong>MArca vehículo:</strong> </td><td>" . strip_tags($_POST['marca']) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

			$this->load->library('email');
			$this->email->from(strip_tags($_POST['email']), strip_tags($_POST['nombre']));
			$this->email->to(SITEEMAIL);
			$this->email->subject('Contacto (Modo Store)');
			$this->email->message($message);
			if($this->email->send()) $ok = "ok";
			else $ok = false;
			
			echo json_encode(array('ok' => $ok));
		}
}

?>
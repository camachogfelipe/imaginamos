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
        $texto_contact = new formulario_contact();
        $this->_data['text_contact'] = $texto_contact->join_related('imagen')->get(); 
        $this->_data['current_page'] = strtolower(__CLASS__);  
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
        $message .= '<img src="'.base_url().'assets/img/logo_header.png" alt="Logotipo" />';
        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($_POST['nombre']) . "</td></tr>";
        $message .= "<tr><td><strong>Direccion:</strong> </td><td>" . strip_tags($_POST['direccion']) . "</td></tr>";
        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
        $message .= "<tr><td><strong>Telefono Fijo:</strong> </td><td>" . strip_tags($_POST['telefono']) . "</td></tr>";
        $message .= "<tr><td><strong>Telefono Celular:</strong> </td><td>" . strip_tags($_POST['celular']) . "</td></tr>";
        $message .= "<tr><td><strong>Comentarios:</strong> </td><td>" . htmlentities($_POST['comentario']) . "</td></tr>";
        $message .= "</table>";
        $message .= "</body></html>";

        $this->load->library('email');
        $this->email->from(strip_tags($_POST['email']), strip_tags($_POST['nombre']));
       // $this->email->to('info@autostore.com');
        $this->email->cc('elbert.tous@imaginamos.co');
        $this->email->subject('Contacto (TALLER POSTAL)');
        $this->email->message($message);
        $this->email->send();
    }
    
    public function newletter() {
        $newletter = new newsletter();
        $newletter->id = "";  
        $newletter->nombre = $this->_post('nombre'); 
        $newletter->email = $this->_post('email'); 
        $newletter->interes = $this->_post('interes'); 
        if($newletter->save()){
            $this->_data['email_send'] = true;
        }
        return $this->build();
    }

}

?>
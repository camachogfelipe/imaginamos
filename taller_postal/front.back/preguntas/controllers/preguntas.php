<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class Preguntas extends Front_Controller {


    public function __construct() {
        parent::__construct();
        $preguntas = new pqr(); 
        $this->_data['pqr'] = $preguntas->get(); 
        $ciudades = new municipios(); 
        $this->_data['municipios'] = $ciudades->get(); 
        $this->_data['newletter_send'] = FALSE; 
          $this->_data['email_send'] = FALSE;
          $this->_data['current_page'] = strtolower(__CLASS__); 
    }

    public function index() {
        $this->_data['email_send'] = $this->session->userdata('email_send');
        $this->session->set_userdata(array('email_send'=>false));
        $this->_data['newletter_send'] = $this->session->userdata('newletter_send');
        $this->session->set_userdata(array('newletter_send'=>false));
        return $this->build();
    }
    
    public function newletter() {
        $newletter = new newletter();
        $newletter->id = "";
        $newletter->nombre = $this->_post('nombre');
        $newletter->correo = $this->_post('email');
        if ($newletter->save()) {
            $this->_data['newletter_send'] = true;
            $this->session->set_userdata(array('newletter_send'=>true));
        }
        redirect('preguntas');
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
        $this->email->to('elbert.tous@imaginamos.co');
        $this->email->subject('Contacto (TALLER POSTAL)');
        $this->email->message($message);
        if($this->email->send()){
            $this->session->set_userdata('email_send',true);
        }
        redirect('preguntas');
    }

}
?>
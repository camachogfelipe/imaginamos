<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Elbert Tous Ballesteros
 */
class Contactos extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $data_contact = new contacto();
        $this->_data['contacto'] = $data_contact->get(); 
        $horario = new horario_atencion(); 
        $this->_data['horario'] = $horario->join_related('imagen')->get(); 
        
    }

    // ----------------------------------------------------------------------

    public function index() {
        if(count($_REQUEST)!=0){
          $this->_data['email_send'] = $this->enviar_email();
		}else{
	      $this->_data['email_send'] = false;
	    }
        return $this->build();
        
    }
    
    
   public function enviar_email() {
     try{
	 $message = '<html><body>';
     $message .= '<img src="'.base_url().'assets/img/header-logo.png" alt="Contactos Dajer Equipos" />';
     $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
     $message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($_REQUEST['nombre']) . "</td></tr>";
     $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_REQUEST['email']) . "</td></tr>";
     $message .= "<tr><td><strong>Empresa:</strong> </td><td>" . strip_tags($_REQUEST['empresa']) . "</td></tr>";
     $message .= "<tr><td><strong>Telefono Fijo:</strong> </td><td>" . strip_tags($_REQUEST['telefono_fijo']) . "</td></tr>";
     $message .= "<tr><td><strong>Telefono Celular:</strong> </td><td>" . strip_tags($_REQUEST['telefono_celular']) . "</td></tr>";
     $message .= "<tr><td><strong>Ciudad:</strong> </td><td>" . $_REQUEST['ciudad'] . "</td></tr>";
     $message .= "<tr><td><strong>Dirección:</strong> </td><td>" . $_REQUEST['direccion'] . "</td></tr>";
     $message .= "<tr><td><strong>Comentarios:</strong> </td><td>" . htmlentities($_REQUEST['comentarios']) . "</td></tr>";
     $message .= "</table>";
     $message .= "</body></html>";
    
     $this->load->library('email');
     $this->email->from(strip_tags($_REQUEST['email']),strip_tags($_REQUEST['nombre']));
     $this->email->to('elbert.tous@imaginamos.co');
     $this->email->cc('elbert.tous@imaginamos.co');
     $this->email->subject('Catacto (Dajer Equipo)');
     $this->email->message($message);
     $this->email->send();
	 return true;
	 }catch(Exception $e){
		 return false;
     }
   }
    // ----------------------------------------------------------------------
   
}

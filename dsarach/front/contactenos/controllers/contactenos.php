<?php

defined("BASEPATH") OR exit("No direct script access allowed");

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Contactenos extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index($send = "") {
        $this->load->model(array(
                                "_contacto/contacto"
                                )
                        );
        
        $c = new Contacto();
        $contacto = $c->getContactoById(1);
        $this->_data["contacto"] = $contacto;
        $this->_data["send"] = $send;
        
        
        $this->set_title("Bienvenidos a " . SITENAME, true);
        return $this->build();
    }
    
    public function send(){
        $this->load->model(array(
                                "_contacto/contacto"
                                )
                        );
        
        $c = new Contacto();
        $contacto = $c->getContactoById(1);
        $this->_data["contacto"] = $contacto;
        $retorn['save'] = FALSE;
        $nombre = $this->input->post("nombre");
        $email = $this->input->post("email");
        $telefono = $this->input->post("celular");
        $asunto = $this->input->post("asunto");
        $comentario = $this->input->post("comentario");
        //contacto-ok.php        
        //////////////Email
        $this->load->library('email');
        $emailsend = "andresr56@gmail.com";
        $this->email->from('dsarach.com', $this->input->post("email"));
        $this->email->to($emailsend); 

        $this->email->subject('Contacto desde sitio Web. / '.$asunto);
        $message ="

            Se ha realizado un comentario con la siguiente informacion:<br /><br />
            Nombre: ".$nombre.", <br />
            Email: ".$email."<br />
            Celular: ".$telefono."<br />
            Asunto: ".$asunto."<br />
            Comentario: ".$comentario."<br />";
        $this->email->message($message);

        if ($this->email->send()){
           $d = 1;
           return redirect('contactenos/index/'.$d);                          
        }else{
           $d = 2;
           return redirect('contactenos/index/'.$d);
        } 
    }
    // ----------------------------------------------------------------------
   
}

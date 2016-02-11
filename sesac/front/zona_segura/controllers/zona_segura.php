<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class Zona_segura extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
//        $this->set_title('Bienvenidos a ' . SITENAME, true);
        //$this->zona_segura_login();
        $this->dashborad();
    }
    
    public function login(){
        return $this->build();
    }
    
    private function welcome(){
        return $this->build("logged_user");
    }
    
    private function dashborad(){
        return $this->build("dashboard");
    }
    
    

    // ----------------------------------------------------------------------
   
}

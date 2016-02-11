<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class Trabajo extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
//        $this->set_title('Bienvenidos a ' . SITENAME, true);
        return $this->build();
    }

    // ----------------------------------------------------------------------
   
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Elbert Tous Ballesteros
 */
class servicios extends Front_Controller {

    public function __construct() {
        
        $servicio = new servicio(); 
        $this->_data['servicios'] =$servicio->join_related('imagen')->get(); 
        
        parent::__construct();
        
    }

    // ----------------------------------------------------------------------

    public function index() {
        return $this->build();
    }
    // ----------------------------------------------------------------------
   
}

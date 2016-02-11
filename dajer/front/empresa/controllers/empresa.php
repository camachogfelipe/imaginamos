<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Elbert Tous Ballesteros
 */
class empresa extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $empresa = new acerca_de(); 
        $this->_data['acerca'] = $empresa->join_related('imagen')->get(); 
        $logos = new logos();
        $this->_data['logos'] = $logos->join_related('imagen')->get();
    }

    // ----------------------------------------------------------------------

    public function index() {
        return $this->build();
    }
    
    

    // ----------------------------------------------------------------------
   
}

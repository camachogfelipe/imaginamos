<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author rigobcastro
 */
class Dashboard extends Back_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->superadmin_area();
    }

    // ----------------------------------------------------------------------

    public function index() {
    
        return $this->build('dashboard/body');
    }

    // ----------------------------------------------------------------------
    

}
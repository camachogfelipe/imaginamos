<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Campestre extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
    }

    // ----------------------------------------------------------------------

    public function index() {
        return $this->build('body');
    }



}
 
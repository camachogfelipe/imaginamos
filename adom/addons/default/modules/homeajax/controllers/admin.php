<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home module
 *
 * @author 		Eduard Russy
 * @website		
 * @package 	
 * @subpackage 	
 * @copyright 	MIT
 */
class Admin extends Admin_Controller {

    public function index() {
        redirect('admin');
    }

}

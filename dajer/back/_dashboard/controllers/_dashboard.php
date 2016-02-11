<?php

/**
 * @author rigobcastro
 */
class _Dashboard extends Back_Controller {
    
    protected $admin_area = true;
    
    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->_data['web_name'] = SITENAME; 
       return $this->build('body');
       
    }
  
}
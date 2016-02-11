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
class Menus extends Back_Controller {
    
    private $_mapper = 'Menu';
    
    public function __construct() {
        parent::__construct();
        
        $this->superadmin_area();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $datos = new $this->_mapper;
        $datos->get();
        
        $this->_data['datos'] = $datos;
        return $this->build('menus/body');
    }

    // ----------------------------------------------------------------------
    
    public function add() {
       $datos = new $this->_mapper;
       
       $datos->title = $this->_post('title');
       $datos->url = $this->_post('url');
       $datos->icon = $this->_post('icon');
       
      
       if($datos->save()){
           return redirect($this->_post('continue_url'));
       }
       
       return show_error($datos->error->string);
    }

    // ----------------------------------------------------------------------
}
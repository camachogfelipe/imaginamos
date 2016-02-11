<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Directorio_categoria extends DataMapper {

    public $model = 'directorio_categoria';
    public $table = 'directorio_categorias';
    
    public $has_one = array();
    public $has_many = array(
        'directorio' => array(
            'auto_populate' => true
        )
    );
    
    public $validation = array(
        'name' => array(
            'label' => 'Nombre',
            'rules' => array('required', 'unique')
        )
    );
    
    public $default_order_by = array('name' => 'ASC');

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
    
    public function count_anuncios() {
       if(!$this->exists()){
           return false;
       }
       
       $datos = $this->directorio;
       
       
       $datos->where('active', true);
       
       return $datos->count();
    }

    // ----------------------------------------------------------------------
    
    public function get_active_anuncios($page = null, $page_size = 10) {
         if(!$this->exists()){
           return false;
       }
       
       $datos = $this->directorio;
       
       $datos->where('active', true);
       
       $datos->where_related($this);
       
       if(!empty($page)){
           return $datos->get_paged($page, $page_size);
       }
       
       return $datos->get();
    }

    // ----------------------------------------------------------------------
  

    public function get_for_select($text = 'Seleccione la categoria') {
        $return = array(0 => $text);

        $datos = clone $this;

        $datos->get();

        foreach ($datos->all as $dato) {
            $return[$dato->id] = $dato->name;
        }

        return $return;
    }

    // ----------------------------------------------------------------------
}
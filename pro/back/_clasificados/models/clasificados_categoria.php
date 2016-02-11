<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Clasificados_categoria extends DataMapper {

    public $model = 'clasificados_categoria';
    public $table = 'clasificados_categorias';
    public $has_one = array();
    public $has_many = array(
        'clasificado' => array(
            'auto_populate' => true
        )
    );
    public $validation = array(
        'nombre' => array(
            'label' => 'Nombre',
            'rules' => array('required', 'unique')
        ),
        'descripcion' => array(
            'label' => 'Descripción',
            'rules' => array('required')
        )
    );
    
    public $default_order_by = array('nombre' => 'ASC');

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
    
   

    public function get_for_select($text = 'Seleccione la categoría...') {
        $return = array(0 => $text);
        
        $datos = clone $this;
        
        $datos->get();
        
        foreach($datos->all as $dato){
            $return[$dato->id] = $dato->nombre;
        }
        
        return $return;
    }
}
<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Clasificados_aplicacion extends DataMapper {

    public $model = 'clasificados_aplicacion';
    public $table = 'clasificados_aplicaciones';
    public $has_one = array(
        'clasificado' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
        'user' => array(
            'join_table' => 'users_clasificados_aplicaciones',
            'auto_populate' => true
        )
    );
    
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

   
}
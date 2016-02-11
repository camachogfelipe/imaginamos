<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Audiciones_aplicacion extends DataMapper {

    public $model = 'audiciones_aplicacion';
    public $table = 'audiciones_aplicaciones';
    public $has_one = array(
        'audicion' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
        'user' => array(
            'join_table' => 'users_audiciones_aplicaciones',
            'auto_populate' => true
        )
    );
    
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

   
}
<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Directorio_adicional extends DataMapper {

    public $model = 'directorio_adicional';
    public $table = 'directorio_adicionales';
    public $has_one = array(
        'directorio' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array();
    public $default_order_by = array('name' => 'ASC');

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
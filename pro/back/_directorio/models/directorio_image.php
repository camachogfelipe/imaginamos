<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Directorio_image extends DataMapper {

    public $model = 'directorio_image';
    public $table = 'directorio_images';
    public $has_one = array(
        'directorio' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array();
    

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
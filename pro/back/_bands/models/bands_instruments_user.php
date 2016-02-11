<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Bands_instruments_user extends DataMapper {

    public $model = 'bands_instruments_user';
    public $table = 'bands_instruments_users';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        ), 
        'bands_instrument' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
       
    );
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Bands_instrument extends DataMapper {

    public $model = 'bands_instrument';
    public $table = 'bands_instruments';
    public $has_one = array(
        'instrument' => array(
            'auto_populate' => true
        ),
        'band' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
        'bands_instruments_user' => array(
            'auto_populate' => true
        )
    );
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
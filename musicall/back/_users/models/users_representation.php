<?php

class Users_representation extends DataMapper {

    public $model = 'users_representation';
    public $table = 'users_representations';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array();
    
    public $default_order_by = array('name' => 'ASC');

    // ----------------------------------------------------------------------

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
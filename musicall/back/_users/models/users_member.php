<?php

class Users_member extends DataMapper {

    public $model = 'users_member';
    public $table = 'users_members';
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
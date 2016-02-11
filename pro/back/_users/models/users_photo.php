<?php

class Users_photo extends DataMapper {

    public $model = 'users_photo';
    public $table = 'users_photos';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array(
        'image' => array(
            'label' => 'Image',
            'rules' => array('required')
        )
    );
    
    public $default_order_by = array('uploaded_on' => 'DESC');

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
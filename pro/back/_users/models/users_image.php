<?php

class Users_image extends DataMapper {

    public $model = 'users_image';
    public $table = 'users_images';
    
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    
    public $validation = array(
        'name' => array(
            'label' => 'Nombre',
            'rules' => array('required')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);

    }

    // ----------------------------------------------------------------------

}
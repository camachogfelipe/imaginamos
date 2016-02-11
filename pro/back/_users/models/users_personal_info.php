<?php

class Users_personal_info extends DataMapper {

    public $model = 'users_personal_info';
    public $table = 'users_personal_info';
    
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    
    public $validation = array(
        'sitio_web' => array(
            'label' => 'Sitio web',
            'rules' => array('valid_url')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);

    }

    // ----------------------------------------------------------------------

}
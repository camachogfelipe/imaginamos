<?php

class Users_projects_use extends DataMapper {

    public $model = 'users_projects_use';
    public $table = 'users_projects_uses';
    public $has_one = array(
        'users_project' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array();
    

    // ----------------------------------------------------------------------

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
<?php

class Users_projects_gender extends DataMapper {

    public $model = 'users_projects_gender';
    public $table = 'users_projects_genders';
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
<?php

class Group extends DataMapper {

    public $model = 'group';
    public $table = 'groups';
    public $has_one = array();
    public $has_many = array(
        'user' => array(
            'join_table' => 'users_groups'
        )
    );
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
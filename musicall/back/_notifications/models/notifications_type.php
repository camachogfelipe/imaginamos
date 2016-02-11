<?php

class Notifications_type extends DataMapper {

    public $model = 'notifications_type';
    public $table = 'notifications_types';
    public $has_one = array();
    public $has_many = array('notification' => array('auto_populate' => true));
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}
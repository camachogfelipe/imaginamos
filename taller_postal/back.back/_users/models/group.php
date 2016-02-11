<?php

class Group extends DataMapperExt {

    public $model = 'group';
    public $table = 'groups';
    public $has_one = array();
    public $has_many = array(
        'groups_permission',
        'user' => array(
            'join_table' => 'users_groups'
        )
    );
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public static function get_current() {
        $user = new \User;
        $user->get_current();

        if ($user->exists()) {
            return $user->group;
        }
        return false;
    }
}
<?php

/**
 * @author Michael Ivan Quevedo V.
 */
class Groups_permission extends DataMapper {

    public $model = 'groups_permission';
    public $table = 'groups_permissions';
    public $has_one = array(
        'group',
        'permission'
    );
    public $has_many = array();
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }
}
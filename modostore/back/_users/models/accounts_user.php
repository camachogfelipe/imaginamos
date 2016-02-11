<?php

/**
 * @author Michael Ivan Quevedo V.
 */
class Accounts_user extends DataMapper {

    public $model = 'accounts_user';
    public $table = 'accounts_user';
    public $has_one = array();
    public $has_many = array();
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

}
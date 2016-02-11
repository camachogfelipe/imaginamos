<?php

class Groups extends DataMapper {

    public $model = 'groups';
    public $table = 'groups';
    
    public $has_one = array();
    public $has_many = array(
        'users' => array(
            'join_self_as' => 'user', 
            'join_other_as' => 'group', 
            'join_table' => 'cms_users_groups'
            )   
    );

    // --------------------------------------------------------------------
    // Validation
    //   Add validation requirements, such as 'required', for your fields.
    // --------------------------------------------------------------------
    // --------------------------------------------------------------------
    // public $default_order_by = array('created_on' => 'DESC');
    // --------------------------------------------------------------------

    /**
     * Constructor: calls parent constructor
     */
    public function __construct($id = NULL) {
        parent::__construct($id);
    }

}


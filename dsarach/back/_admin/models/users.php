<?php

class Users extends DataMapper {

    
    public $table = 'users';
    
    public $has_one = array();
    public $has_many = array(
        'groups' => array(
            'join_self_as' => 'group', 
            'join_other_as' => 'user', 
            'join_table' => 'cms_users_groups'
            )   
    );
    
   
    // --------------------------------------------------------------------
    // Validation
    //   Add validation requirements, such as 'required', for your fields.
    // --------------------------------------------------------------------

    public $validation = array(
        'email' => array(
            'rules' => array('required', 'valid_email'),
            'label' => 'Email'
        ),
        'nombres' => array(
            'rules' => array('required'),
            'label' => 'Nombre'
        )
    );

    // --------------------------------------------------------------------
    public $default_order_by = array('created_on' => 'DESC');
    // --------------------------------------------------------------------

    /**
     * Constructor: calls parent constructor
     */
    public function __construct($id = NULL) {
        parent::__construct($id);
    }

}


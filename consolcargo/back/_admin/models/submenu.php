<?php

class SubMenu extends DataMapper {

    // public $model = 'menu';
    public $table = 'submenu';
    
    public $has_one = array();
    public $has_many = array();
    
   
    // --------------------------------------------------------------------
    // Validation
    //   Add validation requirements, such as 'required', for your fields.
    // --------------------------------------------------------------------

    public $validation = array(
        'title' => array(
            'rules' => array('required'),
            'label' => 'Título'
        ),
        'url' => array(
            'rules' => array('required'),
            'label' => 'URL'
        ),
        'idmenu' => array(
            'rules' => array('trim', 'required'),
            'label' => 'Menu'
        )
    );

    // --------------------------------------------------------------------
    // public $default_order_by = array('name', 'id' => 'desc');
    // --------------------------------------------------------------------

    /**
     * Constructor: calls parent constructor
     */
    public function __construct($id = NULL) {
        parent::__construct($id);
    }

}


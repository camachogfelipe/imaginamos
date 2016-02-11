<?php

class menu_r extends DataMapper {

    public $table = 'fmenu_text';
    public $has_many = array();

     public $id;
     public $text;
     public $fmenu_items_id; 
    

     public $fields = array('id','text','fmenu_items_id');
     
      public $validation = array(
        'text' => array(
            'rules' => array('required'),
            'label' => 'Texto'
        ),
         'fmenu_items_id' => array(
            'rules' => array('required'),
            'label' => 'Item del Menu'
        )
        
    );
  /*  public $has_one = array(
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'client',
            'join_self_as' => 'imagen_id',
            'join_other_as' => 'id',
            'join table' => '',
            'reciprocal' => FALSE,
            'auto_populate' => NULL,
    ));
   * 
   */
    

    // --------------------------------------------------------------------
    // Validation
    //   Add validation requirements, such as 'required', for your fields.
    // --------------------------------------------------------------------

    // --------------------------------------------------------------------
  //  public $default_order_by = array('created_on' => 'DESC');

    // --------------------------------------------------------------------

    /**
     * Constructor: calls parent constructor
     */
    public function __construct($id = NULL) {
        parent::__construct($id);
    }

}
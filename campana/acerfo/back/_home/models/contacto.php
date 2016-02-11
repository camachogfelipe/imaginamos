<?php

class contacto extends DataMapper {

    public $table = 'contacto';
    public $has_many = array();

     public $id;
     public $email;
     public $direccion;
     public $telefono; 
    

     public $fields = array('id','email','direccion','telefono');
     
     public $validation = array(
        'email' => array(
            'rules' => array('required'),
            'label' => 'Email'
        ),
         'direccion' => array(
            'rules' => array('required'),
            'label' => 'Direccion'
        ),
         'telefono' => array(
            'rules' => array('required'),
            'label' => 'Telefono'
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
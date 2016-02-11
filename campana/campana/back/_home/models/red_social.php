<?php

class red_social extends DataMapper {

    public $table = 'redes_sociales';
    public $has_many = array();

     public $id;
     public $direccion;
     public $type_social_id; 
    

     public $fields = array('id','direccion','type_social_id');
     
      public $validation = array(
        'direccion' => array(
            'rules' => array('required'),
            'label' => 'Direccion'
        ),
         'type_social_id' => array(
            'rules' => array('required'),
            'label' => 'Tipo de Red Social'
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
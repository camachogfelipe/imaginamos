<?php

class trabaje_nosotros extends DataMapper {

    public $table = 'trabaje_nosotros';
    public $has_many = array();

     public $id;
     public $cms_media_id;
    
     public $fields = array('id','cms_media_id');
     
      public $validation = array(
      
         'cms_media_id' => array(
            'rules' => array('required'),
            'label' => 'Imagen'
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
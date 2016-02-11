<?php

class video extends DataMapper {

    public $table = 'video';

     public $id;
     public $titulo;
     public $descripcion; 
     public $propietario_id;

     public $fields = array('id','titulo','descripcion','propietario_id');
     
     public $validation = array(
       'id' => array(
            'rules' => array('required'),
            'label' => 'Id'
        ),
        'titulo' => array(
            'rules' => array('required'),
            'label' => 'Titulo'
        ),
         'descripcion' => array(
            'rules' => array('required'),
            'label' => 'Descripcion'
        ),
         'propietario_id' => array(
            'rules' => array('required'),
            'label' => 'Propietario'
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
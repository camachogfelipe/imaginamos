<?php

class linea extends DataMapper {

   public $table = 'linea';

     public $id;
     public $titulo;
     public $subtitulo;

     public $fields = array('id','titulo','subtitulo');
     
     public $validation = array(
        'titulo' => array(
            'rules' => array('required'),
            'label' => 'Titutlo'
        ),
         'subtitulo' => array(
            'rules' => array('required'),
            'label' => 'Subtitulo'
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
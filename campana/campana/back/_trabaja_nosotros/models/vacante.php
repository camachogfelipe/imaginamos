<?php

class vacante extends DataMapper {

    public $table = 'vancante';
    public $has_many = array();

     public $id;
     public $nombre;
     public $subtitulo; 
     public $detalle;
     public $media_id; 
     public $intro_detalle;
     
    

     public $fields = array('id','nombre','subtitulo','detalle','intro_detalle','media_id');
     
      public $validation = array(
        'nombre' => array(
            'rules' => array('required'),
            'label' => 'Nombre'
        ),
         'subtitulo' => array(
            'rules' => array('required'),
            'label' => 'Subtitulo'
        ),
         'detalle' => array(
            'rules' => array('required'),
            'label' => 'Detalles'
        ),
        'intro_detalle' => array(
            'rules' => array('required'),
            'label' => 'Detalles'
        ),
        'media_id' => array(
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
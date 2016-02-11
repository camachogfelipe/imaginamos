<?php

class trabajador extends DataMapper {

    public $table = 'trabajador';

     public $id;
     public $nombre;
     public $cargo;
     public $comentario;
     public $media_id;
     public $media_id1;
     public $media_id2;
		 public $orden;
    

     public $fields = array('id','nombre','cargo','comentario','media_id','media_id1','media_id2','orden');
     
     public $validation = array(
        'nombre' => array(
            'rules' => array('required'),
            'label' => 'Nombre'
        ),
         'cargo' => array(
            'rules' => array('required'),
            'label' => 'Cargo'
        ),
         'media_id' => array(
            'rules' => array('required'),
            'label' => 'Foto Min Color'
        ),
        'media_id1' => array(
            'rules' => array('required'),
            'label' => 'Foto Min Gris'
        ),
         "media_id2" => array(
            'rules' => array('required'),
            'label' => 'Foto Grande'
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
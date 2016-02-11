<?php

class postulado extends DataMapper {

    public $table = 'postulado';
    public $id;
    public $nombre;
    public $email;
    public $ciudad;
    public $cv;
    public $telefono;
    public $comentario;
    public $vancante_id;
    public $fields = array('id', 'nombre', 'email', 'ciudad', 'cv', 'telefono', 'comentario', 'vancante_id');
    public $validation = array();

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
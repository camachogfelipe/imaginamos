<?php

class documento extends DataMapper {

    public $table = 'documento';

     public $id;
     public $titulo_funte1;
     public $titulo_funte2;
     public $texto;
     public $cms_media_id;
     public $cms_media_id1;
		 public $destacado;
    

     public $fields = array('id','titulo_funte1','titulo_funte2','texto','cms_media_id','cms_media_id1','destacado');
     
     public $validation = array(
        'titulo_funte2' => array(
            'rules' => array('required'),
            'label' => 'Titulo Funete2'
        ),
         'texto' => array(
            'rules' => array('required'),
            'label' => 'Descripcion'
        ),
         'cms_media_id' => array(
            'rules' => array('required'),
            'label' => 'Imagen'
        ),
         'cms_media_id1' => array(
            'rules' => array('required'),
            'label' => 'Documento'
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
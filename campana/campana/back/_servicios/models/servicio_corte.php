<?php

class servicio_corte extends DataMapper {

    public $table = 'servicio_corte';

     public $id;
     public $titulo;
     public $texto;
     public $cms_media_id; /*video*/
     //public $cms_media_id2; /*Imagen Min del video*/
     public $cms_media_id1; /*documento*/
    

     public $fields = array('id','titulo','texto','cms_media_id','cms_media_id1');//,'cms_media_id2');
     
     public $validation = array(
        'titulo' => array(
            'rules' => array('required'),
            'label' => 'Nombre'
        ),
         'texto' => array(
            'rules' => array('required'),
            'label' => 'Cargo'
        ),
         'cms_media_id' => array(
            'rules' => array('required'),
            'label' => 'Video'
        ),
        /*'cms_media_id1' => array(
            'rules' => array('required'),
            'label' => 'Especificaciones Tecnicas'
        ),*/
        /*'cms_media_id2' => array(
            'rules' => array('required'),
            'label' => 'Imegen Video'
        )*/
         
         
        
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
<?php

class sub_categoria extends DataMapper {

    public $table = 'sub_categorias';

     public $id;
     public $titulo;
     public $subtitulo;
     public $texto;
     public $cms_media_id;
     public $cms_categoria_id;
    
     public $fields = array('id','titulo','subtitulo','texto','cms_media_id','cms_categoria_id');
     
     public $validation = array(
        'titulo' => array(
            'rules' => array('required'),
            'label' => 'Titutlo'
        ),
         'subtitulo' => array(
            'rules' => array('required'),
            'label' => 'Subtitulo'
        ),
         'texto' => array(
            'rules' => array('required'),
            'label' => 'Subtitulo'
        ),
         'cms_media_id' => array(
            'rules' => array('required'),
            'label' => 'Imagen'
        ),
        'cms_categoria_id' => array(
            'rules' => array('required'),
            'label' => 'Categoria'
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
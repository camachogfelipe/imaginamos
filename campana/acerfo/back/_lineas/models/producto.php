<?php

class producto extends DataMapper {

    public $table = 'producto';

     public $id;
     public $titulo;
     public $subtitulo;
     public $texto;
     public $intro_text;
     public $cms_media_id;
     public $cms_media_id2;
     public $cms_sub_categorias_id;
		 public $cms_categoria_id;


     public $fields = array('id','titulo','subtitulo','texto','intro_text','cms_media_id','cms_media_id2','cms_sub_categorias_id','cms_categoria_id');
     
     public $validation = array(
        'titulo' => array(
            'rules' => array('required'),
            'label' => 'Titulo'
        ),
         'subtitulo' => array(
            'rules' => array('required'),
            'label' => 'Subtitulo'
        ),
         'texto' => array(
            'rules' => array('required'),
            'label' => 'Texto descriptivo'
        ),
        'intro_text' => array(
            'rules' => array('required'),
            'label' => 'Texto de introduccion'
        ),
        'cms_media_id' => array(
            'rules' => array('required'),
            'label' => 'Imagen del producto'
        ),
        'cms_categoria_id' => array(
            'label' => 'Categoría'
        ),
        'cms_sub_categorias_id' => array(
            'label' => 'Sub Categoría'
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
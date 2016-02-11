<?php

class enterese extends DataMapper {

    public $table = 'enterese';
    public $has_many = array();

     public $id;
     public $titulo;
     public $subtitulo; 
     public $texto;
     public $intro_text;
     public $media_id; //IMAGEN
     public $media_id1; //IMAGEN  Min 
     public $video_id;
		 public $destacado;

     public $fields = array('id','titulo','subtitulo','texto','intro_text','media_id','media_id1','video_id','destacado');
     
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
            'label' => 'Texto'
        ),
        'intro_text' => array(
            'rules' => array('required'),
            'label' => 'Texto Introductorio'
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
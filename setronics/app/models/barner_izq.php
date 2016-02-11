<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class barner_izq extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 16.
     */
    public $titulo;

    /**
     * @var varchar Max length is 21.
     */
    public $subtitulo;

    /**
     * @var varchar Max length is 19.
     */
    public $text_color1;

    /**
     * @var varchar Max length is 16.
     */
    public $text_color2;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $linea_id;

    /**
     * @var varchar Max length is 200.
     */
    public $url;

    public $table = 'barner_izq';

    public $model = 'barner_izq';
    public $primarykey = 'id';
    public $fields = array('id','titulo','subtitulo','text_color1','text_color2','imagen_id','linea_id','url');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'barner_izq',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'barner_izq',
                  'join_table' => 'cms_imagen',
                ),

                'linea' => array(
                  'class' => 'linea',
                  'other_field' => 'barner_izq',
                  'join_other_as' => 'linea',
                  'join_self_as' => 'barner_izq',
                  'join_table' => 'cms_linea',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'titulo' => array(
                  'rules' => array( 'max_length' => 16, 'required' ),
                  'label' => 'TITULO',
                ),

                'subtitulo' => array(
                  'rules' => array( 'max_length' => 21, 'required' ),
                  'label' => 'SUBTITULO',
                ),

                'text_color1' => array(
                  'rules' => array( 'max_length' => 19, 'required' ),
                  'label' => 'TEXTCOLOR1',
                ),

                'text_color2' => array(
                  'rules' => array( 'max_length' => 16, 'required' ),
                  'label' => 'TEXTCOLOR2',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'linea_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'LINEA',
                ),

                'url' => array(
                  'rules' => array( 'max_length' => 200, 'required' ),
                  'label' => 'URL',
                )
            );


}
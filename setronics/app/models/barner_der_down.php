<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class barner_der_down extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 32.
     */
    public $titulo;

    /**
     * @var varchar Max length is 53.
     */
    public $subtitulo;

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

    public $table = 'barner_der_down';

    public $model = 'barner_der_down';
    public $primarykey = 'id';
    public $fields = array('id','titulo','subtitulo','imagen_id','linea_id','url');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'barner_der_down',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'barner_der_down',
                  'join_table' => 'cms_imagen',
                ),

                'linea' => array(
                  'class' => 'linea',
                  'other_field' => 'barner_der_down',
                  'join_other_as' => 'linea',
                  'join_self_as' => 'barner_der_down',
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
                  'rules' => array( 'max_length' => 32, 'required' ),
                  'label' => 'TITULO',
                ),

                'subtitulo' => array(
                  'rules' => array( 'max_length' => 53, 'required' ),
                  'label' => 'SUBTITULO',
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
<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class novedad extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 32.
     */
    public $titulo;

    /**
     * @var date
     */
    public $fecha;

    /**
     * @var varchar Max length is 102.
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var varchar Max length is 300.
     */
    public $link;

    public $table = 'novedad';

    public $model = 'novedad';
    public $primarykey = 'id';
    public $fields = array('id','titulo','fecha','texto','imagen_id','link');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'novedad',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'novedad',
                  'join_table' => 'cms_imagen',
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

                'fecha' => array(
                  'rules' => array( 'valid_date', 'required' ),
                  'label' => 'FECHA',
                ),

                'texto' => array(
                  'rules' => array( 'max_length' => 102, 'required' ),
                  'label' => 'TEXTO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'link' => array(
                  'rules' => array( 'max_length' => 300, 'required' ),
                  'label' => 'LINK',
                )
            );


}
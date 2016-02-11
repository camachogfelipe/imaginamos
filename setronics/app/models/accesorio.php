<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class accesorio extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 44.
     */
    public $titulo;

    /**
     * @var varchar Max length is 100.
     */
    public $descripcion;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $producto_id;

    public $table = 'accesorio';

    public $model = 'accesorio';
    public $primarykey = 'id';
    public $fields = array('id','titulo','descripcion','imagen_id','producto_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'accesorio',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'accesorio',
                  'join_table' => 'cms_imagen',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'accesorio',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'accesorio',
                  'join_table' => 'cms_producto',
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
                  'rules' => array( 'max_length' => 44, 'required' ),
                  'label' => 'TITULO',
                ),

                'descripcion' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'DESCRIPCION',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                )
            );


}
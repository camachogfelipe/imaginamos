<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class servicio extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 37.
     */
    public $titulo;

    /**
     * @var varchar Max length is 1037.
     */
    public $texto_intro;

    /**
     * @var varchar Max length is 45.
     */
    public $descripcion;

    /**
     * @var double
     */
    public $precio_provedor;

    /**
     * @var double
     */
    public $precio_cliente;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;

    public $table = 'servicio';

    public $model = 'servicio';
    public $primarykey = 'id';
    public $fields = array('id','titulo','texto_intro','descripcion','precio_provedor','precio_cliente','imagen_id','categoria_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'servicio',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'servicio',
                  'join_table' => 'cms_imagen',
                ),

                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'servicio',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'servicio',
                  'join_table' => 'cms_categoria',
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
                  'rules' => array( 'max_length' => 37, 'required' ),
                  'label' => 'TITULO',
                ),

                'texto_intro' => array(
                  'rules' => array( 'max_length' => 1037, 'required' ),
                  'label' => 'TEXTOINTRO',
                ),

                'descripcion' => array(
                  'rules' => array('required' ),
                  'label' => 'DESCRIPCION',
                ),

                'precio_provedor' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIOPROVEDOR',
                ),

                'precio_cliente' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIOCLIENTE',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CATEGORIA',
                )
            );


}
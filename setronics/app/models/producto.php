<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class producto extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 24.
     */
    public $titulo;

    /**
     * @var varchar Max length is 63.
     */
    public $descripcion_intro;

    /**
     * @var text
     */
    public $descripcion;

    /**
     * @var text
     */
    public $especificacion_tecnica;

    /**
     * @var varchar Max length is 200.
     */
    public $path_info_tenica;

    /**
     * @var varchar Max length is 200.
     */
    public $path_folleto;

    /**
     * @var double
     */
    public $precio_prov;

    /**
     * @var double
     */
    public $precio_client;
    
        /**
     * @var double
     */
    public $recomendado;

    /**
     * @var int Max length is 11.
     */
    public $grupo_id;

    public $table = 'producto';

    public $model = 'producto';
    public $primarykey = 'id';
    public $fields = array('id','titulo','descripcion_intro','descripcion','especificacion_tecnica','path_info_tenica','path_folleto','precio_prov','precio_client','grupo_id','recomendado');

    public $has_one =  array(
                'grupo' => array(
                  'class' => 'grupo',
                  'other_field' => 'producto',
                  'join_other_as' => 'grupo',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_grupo',
                )
            );



    public $has_many =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'producto',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_producto_imagen',
                ),

                'venta' => array(
                  'class' => 'venta',
                  'other_field' => 'producto',
                  'join_other_as' => 'venta',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_venta_producto',
                )
            );



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'titulo' => array(
                  'rules' => array( 'max_length' => 24, 'required' ),
                  'label' => 'TITULO',
                ),

                'descripcion_intro' => array(
                  'rules' => array( 'max_length' => 63, 'required' ),
                  'label' => 'DESCRIPCION INTRO',
                ),

                'descripcion' => array(
                  'rules' => array( 'required' ),
                  'label' => 'DESCRIPCION',
                ),

                'path_info_tenica' => array(
                  'rules' => array( 'max_length' => 200 ),
                  'label' => 'PATH INFO TENICA',
                ),

                'path_folleto' => array(
                  'rules' => array( 'max_length' => 200 ),
                  'label' => 'PATH FOLLETO',
                ),

                'precio_prov' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIO PROV',
                ),

                'precio_client' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIO CLIENT',
                ),

                'grupo_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'GRUPO',
                )
            );


}
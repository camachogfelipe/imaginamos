<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class gestion_flota extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var text
     */
    public $descripcion;

    /**
     * @var int Max length is 11.
     */
    public $linea_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'gestion_flota';

    public $model = 'gestion_flota';
    public $primarykey = 'id';
    public $fields = array('id','descripcion','linea_id','imagen_id');

    public $has_one =  array(
                'linea' => array(
                  'class' => 'linea',
                  'other_field' => 'gestion_flota',
                  'join_other_as' => 'linea',
                  'join_self_as' => 'gestion_flota',
                  'join_table' => 'cms_linea',
                ),

                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'gestion_flota',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'gestion_flota',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many =  array(
                'cliente' => array(
                  'class' => 'cliente',
                  'other_field' => 'gestion_flota',
                  'join_other_as' => 'cliente',
                  'join_self_as' => 'gestion_flota',
                  'join_table' => 'cms_cliente_gestion_flota',
                ),

                'noticia_relacionada' => array(
                  'class' => 'noticia_relacionada',
                  'other_field' => 'gestion_flota',
                  'join_other_as' => 'noticia_relacionada',
                  'join_self_as' => 'gestion_flota',
                  'join_table' => 'cms_gestion_flota_noticia_relacionada',
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

                'descripcion' => array(
                  'rules' => array( 'required' ),
                  'label' => 'DESCRIPCION',
                ),

                'linea_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'LINEA',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );


}
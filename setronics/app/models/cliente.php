<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class cliente extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 43.
     */
    public $nombre;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'cliente';

    public $model = 'cliente';
    public $primarykey = 'id';
    public $fields = array('id','nombre','imagen_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'cliente',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'cliente',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many =  array(
                'caso_exito' => array(
                  'class' => 'caso_exito',
                  'other_field' => 'cliente',
                  'join_other_as' => 'caso_exito',
                  'join_self_as' => 'cliente',
                  'join_table' => 'cms_cliente_caso_exito',
                ),

                'gestion_flota' => array(
                  'class' => 'gestion_flota',
                  'other_field' => 'cliente',
                  'join_other_as' => 'gestion_flota',
                  'join_self_as' => 'cliente',
                  'join_table' => 'cms_cliente_gestion_flota',
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

                'nombre' => array(
                  'rules' => array( 'max_length' => 43, 'required' ),
                  'label' => 'NOMBRE',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );


}
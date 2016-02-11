<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class cliente_gestion_flota extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $cliente_id;

    /**
     * @var int Max length is 11.
     */
    public $gestion_flota_id;

    public $table = 'cliente_gestion_flota';

    public $model = 'cliente_gestion_flota';
    public $primarykey = 'gestion_flota_id';
    public $fields = array('cliente_id','gestion_flota_id');

    public $has_one =  array(
                'cliente' => array(
                  'class' => 'cliente',
                  'other_field' => 'cliente_gestion_flota',
                  'join_other_as' => 'cliente',
                  'join_self_as' => 'cliente_gestion_flota',
                  'join_table' => 'cms_cliente',
                ),

                'gestion_flota' => array(
                  'class' => 'gestion_flota',
                  'other_field' => 'cliente_gestion_flota',
                  'join_other_as' => 'gestion_flota',
                  'join_self_as' => 'cliente_gestion_flota',
                  'join_table' => 'cms_gestion_flota',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'cliente_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CLIENTE',
                ),

                'gestion_flota_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'GESTIONFLOTA',
                )
            );


}
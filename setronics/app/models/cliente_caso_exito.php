<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class cliente_caso_exito extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $cliente_id;

    /**
     * @var int Max length is 11.
     */
    public $caso_exito_id;

    public $table = 'cliente_caso_exito';

    public $model = 'cliente_caso_exito';
    public $primarykey = 'caso_exito_id';
    public $fields = array('cliente_id','caso_exito_id');

    public $has_one =  array(
                'cliente' => array(
                  'class' => 'cliente',
                  'other_field' => 'cliente_caso_exito',
                  'join_other_as' => 'cliente',
                  'join_self_as' => 'cliente_caso_exito',
                  'join_table' => 'cms_cliente',
                ),

                'caso_exito' => array(
                  'class' => 'caso_exito',
                  'other_field' => 'cliente_caso_exito',
                  'join_other_as' => 'caso_exito',
                  'join_self_as' => 'cliente_caso_exito',
                  'join_table' => 'cms_caso_exito',
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

                'caso_exito_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CASOEXITO',
                )
            );


}
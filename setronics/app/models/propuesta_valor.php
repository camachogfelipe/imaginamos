<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class propuesta_valor extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;

    /**
     * @var text
     */
    public $texto;

    public $table = 'propuesta_valor';

    public $model = 'propuesta_valor';
    public $primarykey = 'id';
    public $fields = array('id','categoria_id','texto', );

    public $has_one =  array(
                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'propuesta_valor',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'propuesta_valor',
                  'join_table' => 'cms_categoria',
                ),
             
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

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CATEGORIA',
                ),

                'texto' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TEXTO',
                )
            );


}
<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class grupo extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $grupo;
    
      /**
     * @var varchar Max length is 100.
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    
    public $table = 'grupo';

    public $model = 'grupo';
    public $primarykey = 'id';
    public $fields = array('id','grupo','categoria_id','imagen_id','texto');

    public $has_one =  array(
                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'grupo',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'grupo',
                  'join_table' => 'cms_categoria',
                ),
                 'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'grupo',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'grupo',
                  'join_table' => 'cms_imagen',
                )
                   
            );



    public $has_many =  array(
                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'grupo',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'grupo',
                  'join_table' => 'cms_producto',
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

                'grupo' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'GRUPO',
                ),

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CATEGORIA',
                )
            );


}
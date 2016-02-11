<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class producto_imagen extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $producto_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'producto_imagen';

    public $model = 'producto_imagen';
    public $primarykey = 'imagen_id';
    public $fields = array('producto_id','imagen_id');

    public $has_one =  array(
                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'producto_imagen',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'producto_imagen',
                  'join_table' => 'cms_producto',
                ),

                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'producto_imagen',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'producto_imagen',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );


}
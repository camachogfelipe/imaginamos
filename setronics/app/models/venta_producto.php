<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class venta_producto extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $venta_id;

    /**
     * @var int Max length is 11.
     */
    public $producto_id;

    public $table = 'venta_producto';

    public $model = 'venta_producto';
    public $primarykey = 'producto_id';
    public $fields = array('venta_id','producto_id');

    public $has_one =  array(
                'venta' => array(
                  'class' => 'venta',
                  'other_field' => 'venta_producto',
                  'join_other_as' => 'venta',
                  'join_self_as' => 'venta_producto',
                  'join_table' => 'cms_venta',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'venta_producto',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'venta_producto',
                  'join_table' => 'cms_producto',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'venta_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'VENTA',
                ),

                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                )
            );


}
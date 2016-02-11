<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class venta extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 45.
     */
    public $codigo_confirmacion;

    /**
     * @var double
     */
    public $total_venta;

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $cms_users_id;

    public $table = 'venta';

    public $model = 'venta';
    public $primarykey = 'id';
    public $fields = array('id','codigo_confirmacion','total_venta','cms_users_id');

    public $has_one =  array(
                'cms_users' => array(
                  'class' => 'cms_users',
                  'other_field' => 'venta',
                  'join_other_as' => 'cms_users',
                  'join_self_as' => 'venta',
                  'join_table' => 'cms_cms_users',
                )
            );



    public $has_many =  array(
                'venta_producto' => array(
                  'class' => 'venta_producto',
                  'other_field' => 'venta',
                  'join_other_as' => 'venta_producto',
                  'join_self_as' => 'venta',
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

                'codigo_confirmacion' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'CODIGOCONFIRMACION',
                ),

                'total_venta' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TOTALVENTA',
                ),

                'cms_users_id' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 10, 'required' ),
                  'label' => 'CMSUSERS',
                )
            );


}
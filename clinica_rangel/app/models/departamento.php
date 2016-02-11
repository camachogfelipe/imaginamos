<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class departamento extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $nombre;

    public $table = 'departamento';

    public $model = 'departamento';
    public $primarykey = 'id';
    public $_fields = array('id','nombre');

    public $has_one = array();
    public $has_many =  array(
                'users' => array(
                  'class' => 'users',
                  'other_field' => 'departamento',
                  'join_other_as' => 'users',
                  'join_self_as' => 'departamento',
                  'join_table' => 'cms_users',
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
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'NOMBRE',
                )
            );


}
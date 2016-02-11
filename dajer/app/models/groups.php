<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class groups extends  DataMapper {

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $id;

    /**
     * @var varchar Max length is 20.
     */
    public $name;

    /**
     * @var varchar Max length is 100.
     */
    public $description;

    public $table = 'groups';

    public $model = 'groups';
    public $primarykey = 'id';
    public $_fields = array('id','name','description');

    public $has_one = array();
    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 10 ),
                  'label' => 'ID',
                ),

                'name' => array(
                  'rules' => array( 'max_length' => 20, 'required' ),
                  'label' => 'NAME',
                ),

                'description' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'DESCRIPTION',
                )
            );


}
<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class permissions extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $name;

    /**
     * @var varchar Max length is 255.
     */
    public $var;

    /**
     * @var enum 'module','function','component').
     */
    public $type;

    public $table = 'permissions';

    public $model = 'permissions';
    public $primarykey = 'id';
    public $fields = array('id','name','var','type');

    public $has_one = array();
    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'name' => array(
                  'rules' => array( 'max_length' => 255 ),
                  'label' => 'NAME',
                ),

                'var' => array(
                  'rules' => array( 'max_length' => 255 ),
                  'label' => 'VAR',
                )
            );


}
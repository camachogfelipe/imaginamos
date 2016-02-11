<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class logo extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    public $table = 'logo';

    public $model = 'logo';
    public $primarykey = 'id';
    public $fields = array('id');

    public $has_one = array();
    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'ID',
                )
            );


}
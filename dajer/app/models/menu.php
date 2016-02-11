<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class menu extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $parent;

    /**
     * @var varchar Max length is 255.
     */
    public $name;

    /**
     * @var varchar Max length is 20.
     */
    public $name_short;

    /**
     * @var text
     */
    public $url;

    /**
     * @var text
     */
    public $content;

    /**
     * @var text
     */
    public $image;

    public $table = 'menu';

    public $model = 'menu';
    public $primarykey = 'id';
    public $_fields = array('id','parent','name','name_short','url','content','image');

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

                'parent' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'PARENT',
                ),

                'name' => array(
                  'rules' => array( 'max_length' => 255 ),
                  'label' => 'NAME',
                ),

                'name_short' => array(
                  'rules' => array( 'max_length' => 20 ),
                  'label' => 'NAMESHORT',
                )
            );


}
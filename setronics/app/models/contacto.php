<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class contacto extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 28.
     */
    public $direccion;

    /**
     * @var varchar Max length is 28.
     */
    public $edificio;

    /**
     * @var varchar Max length is 23.
     */
    public $barrio;

    /**
     * @var varchar Max length is 20.
     */
    public $ciudad;

    /**
     * @var varchar Max length is 18.
     */
    public $telefono;

    /**
     * @var varchar Max length is 18.
     */
    public $mobile;

    /**
     * @var varchar Max length is 23.
     */
    public $email;

    public $table = 'contacto';

    public $model = 'contacto';
    public $primarykey = 'id';
    public $fields = array('id','direccion','edificio','barrio','ciudad','telefono','mobile','email');

    public $has_one = array();
    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }

     
   public function get_datos() {
        $model = clone $this;
        $model->get_by_id(1);
        $data_net = array();
        foreach ($this->fields as $key) {
            if($key != 'id')
            $data_net [$key] =  $model->{$key}; 
        }
        return $data_net;
    }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'direccion' => array(
                  'rules' => array( 'max_length' => 28 ),
                  'label' => 'DIRECCION',
                ),

                'edificio' => array(
                  'rules' => array( 'max_length' => 28 ),
                  'label' => 'EDIFICIO',
                ),

                'barrio' => array(
                  'rules' => array( 'max_length' => 23 ),
                  'label' => 'BARRIO',
                ),

                'ciudad' => array(
                  'rules' => array( 'max_length' => 20 ),
                  'label' => 'CIUDAD',
                ),

                'telefono' => array(
                  'rules' => array( 'max_length' => 18 ),
                  'label' => 'TELEFONO',
                ),

                'mobile' => array(
                  'rules' => array( 'max_length' => 18 ),
                  'label' => 'MOBILE',
                ),

                'email' => array(
                  'rules' => array( 'max_length' => 23 ),
                  'label' => 'EMAIL',
                )
            );


}
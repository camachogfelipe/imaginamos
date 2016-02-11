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
     * @var varchar Max length is 40.
     */
    public $direccion;

    /**
     * @var varchar Max length is 20.
     */
    public $telefono;

    /**
     * @var varchar Max length is 45.
     */
    public $ciudad;

    /**
     * @var varchar Max length is 50.
     */
    public $email;


    public $table = 'contacto';

    public $model = 'contacto';
    public $primarykey = 'id';
    public $_fields = array('id','direccion','telefono','ciudad','email');

    public $has_one = array();
    public $has_many = array();



    public function __construct($id = NULL) {
         parent::__construct($id);
    }


    public function get_data($id = '', $campo = 'name') {
        $obj = new $this->model();
        $arrList = array();
        if (empty($id)) {
             $obj->get_iterated();
              foreach ($obj as $value) {
                 $arrList = array('id' => $value->id,'name' => $value->{$campo});
              }
              return $arrList;
        } else {
              return $obj->get_by_id($id);
        }
    }


    public function get_rule($campo, $rule){
         if(array_key_exists($rule, $this->validation[$campo]['rules']))
            return $this->validation[$campo]['rules'][$rule];
         else
            return false;
    }


    public function is_rule($campo, $rule){
         if(in_array($rule, $this->validation[$campo]['rules']))
            return true;
         else
            return false;
    }


    public function to_array_first_row() {
     $model = clone $this;
     $model->get_by_id(1);
     $datos = array();
      foreach ($this->fields as $key) {
           if($key != 'id')
             $datos[$key] = $model->{$key};
      }
      return $datos;
    }


    public $default_order_by = array('id' => 'desc');


    public function post_model_init($from_cache = FALSE){}


    public function _encrypt($field)
    {
          if (!empty($this->{$field}))
          {
              if (empty($this->salt))
              {
                  $this->salt = md5(uniqid(rand(), true));
              }
             $this->{$field} = sha1($this->salt . $this->{$field});
          }
    }


    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'direccion' => array(
                  'rules' => array( 'max_length' => 200 ),
                  'label' => 'DIRECCION',
                ),

                'telefono' => array(
                  'rules' => array( 'max_length' => 25 ),
                  'label' => 'TELEFONO',
                ),

                'ciudad' => array(
                  'rules' => array( 'max_length' => 60 ),
                  'label' => 'CIUDAD',
                ),

                'email' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'EMAIL',
                )
            );


    public $coments =  array(
);

}
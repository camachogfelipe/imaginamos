<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class registro_compra extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 60.
     */
    public $nombre;

    /**
     * @var decimal Max length is 10. ,0).
     */
    public $cedula;

    /**
     * @var varchar Max length is 100.
     */
    public $ciudad;

    /**
     * @var varchar Max length is 100.
     */
    public $direccion;

    /**
     * @var decimal Max length is 10. ,0).
     */
    public $telefono;

    /**
     * @var varchar Max length is 45.
     */
    public $tipo_pago;

    /**
     * @var tinyint Max length is 4.
     */
    public $estado;

    /**
     * @var date
     */
    public $fecha;

    public $table = 'registro_compra';

    public $model = 'registro_compra';
    public $primarykey = 'id';
    public $_fields = array('id','nombre','cedula','ciudad','direccion','telefono','tipo_pago','estado','fecha');

    public $has_one = array();
    public $has_many =  array(
                'venta' => array(
                  'class' => 'venta',
                  'other_field' => 'registro_compra',
                  'join_other_as' => 'venta',
                  'join_self_as' => 'registro_compra',
                  'join_table' => 'cms_venta',
                )
            );



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

                'nombre' => array(
                  'rules' => array( 'max_length' => 60, 'required' ),
                  'label' => 'NOMBRE',
                ),

                'cedula' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CEDULA',
                ),

                'ciudad' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'CIUDAD',
                ),

                'direccion' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'DIRECCION',
                ),

                'telefono' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TELEFONO',
                ),

                'tipo_pago' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'TIPOPAGO',
                ),

                'estado' => array(
                  'rules' => array( 'max_length' => 4, 'required' ),
                  'label' => 'ESTADO',
                ),

                'fecha' => array(
                  'rules' => array( 'valid_date', 'required' ),
                  'label' => 'FECHA',
                )
            );


    public $coments =  array(
);

}
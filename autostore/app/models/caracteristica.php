<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class caracteristica extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 45.
     */
    public $valor;

    /**
     * @var varchar Max length is 45.
     */
    public $tipo;

    /**
     * @var int Max length is 11.
     */
    public $producto_id;

    public $table = 'caracteristica';

    public $model = 'caracteristica';
    public $primarykey = 'id';
    public $_fields = array('id','valor','tipo','producto_id');

    public $has_one =  array(
                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'caracteristica',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'caracteristica',
                  'join_table' => 'cms_producto',
                )
            );



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



    public function get_producto_list($campo="name",$where=array()) {
        $model = new producto();
        $model->where($where)->get();
        $arrList = array();
        foreach ($model as $k) {
            $arrList [] = array(
                'id' => $k->id,
                'name' => $k->{$campo},
            );
        }
        return $arrList;
    }

    public function get_producto($join_retale="") {
        $model = new producto();
        if($join_retale!=""){
           return $model->join_related($join_retale)->get_by_caracteristica_id($this->id);
        }else{
           return $model->get_by_caracteristica_id($this->id);
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

                'valor' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'VALOR',
                ),

                'tipo' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'TIPO',
                ),

                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|view',
                'valor' => 'input|view|label#Valor Caracteristica#|span#span3#',
                'tipo' => 'input|view|label#Tipo Caracteristica#|span#span3#',
                'producto_id' => 'combox|view|label#Producto#|span#span3#|instructions#Seleccione un producto#',
);

}
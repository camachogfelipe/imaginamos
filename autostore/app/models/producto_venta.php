<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class producto_venta extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $venta_id;

    /**
     * @var int Max length is 11.
     */
    public $producto_id;

    public $table = 'producto_venta';

    public $model = 'producto_venta';
    public $primarykey = 'id';
    public $_fields = array('id','venta_id','producto_id');

    public $has_one =  array(
                'venta' => array(
                  'class' => 'venta',
                  'other_field' => 'producto_venta',
                  'join_other_as' => 'venta',
                  'join_self_as' => 'producto_venta',
                  'join_table' => 'cms_venta',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'producto_venta',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'producto_venta',
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



    public function get_venta_list($campo="name",$where=array()) {
        $model = new venta();
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

    public function get_venta($join_retale="") {
        $model = new venta();
        if($join_retale!=""){
           return $model->join_related($join_retale)->get_by_producto_venta_id($this->id);
        }else{
           return $model->get_by_producto_venta_id($this->id);
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
           return $model->join_related($join_retale)->get_by_producto_venta_id($this->id);
        }else{
           return $model->get_by_producto_venta_id($this->id);
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
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'ID',
                ),

                'venta_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'VENTA',
                ),

                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                )
            );


    public $coments =  array(
);

}
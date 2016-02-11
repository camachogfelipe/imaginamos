<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class venta extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $referencia;

    /**
     * @var double
     */
    public $valor_destino;

    /**
     * @var int Max length is 11.
     */
    public $destino_id;

    /**
     * @var int Max length is 11.
     */
    public $registro_compra_id;

    /**
     * @var double
     */
    public $sub_total;

    /**
     * @var char Max length is 1.
     */
    public $iva;

    /**
     * @var double
     */
    public $total;

    public $table = 'venta';

    public $model = 'venta';
    public $primarykey = 'id';
    public $_fields = array('id','referencia','valor_destino','destino_id','registro_compra_id','sub_total','iva','total');

    public $has_one =  array(
                'destino' => array(
                  'class' => 'destino',
                  'other_field' => 'venta',
                  'join_other_as' => 'destino',
                  'join_self_as' => 'venta',
                  'join_table' => 'cms_destino',
                ),

                'registro_compra' => array(
                  'class' => 'registro_compra',
                  'other_field' => 'venta',
                  'join_other_as' => 'registro_compra',
                  'join_self_as' => 'venta',
                  'join_table' => 'cms_registro_compra',
                )
            );



    public $has_many =  array(
                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'venta',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'venta',
                  'join_table' => 'cms_producto_venta',
                ),

                'producto_venta' => array(
                  'class' => 'producto_venta',
                  'other_field' => 'venta',
                  'join_other_as' => 'producto_venta',
                  'join_self_as' => 'venta',
                  'join_table' => 'cms_producto_venta',
                )
            );



    public function __construct($id = NULL) {
         parent::__construct($id);
    }

    public function get_productos() {
        $productos = new producto(); 
        return $productos->get_by_related_venta('id',$this->id); 
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

                'referencia' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'REFERENCIA',
                ),

                'valor_destino' => array(
                  'rules' => array( 'required' ),
                  'label' => 'VALORDESTINO',
                ),

                'destino_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'DESTINO',
                ),

                'registro_compra_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'REGISTROCOMPRA',
                ),

                'sub_total' => array(
                  'rules' => array( 'required' ),
                  'label' => 'SUBTOTAL',
                ),

                'iva' => array(
                  'rules' => array( 'max_length' => 4, 'required' ),
                  'label' => 'IVA',
                ),

                'total' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TOTAL',
                )
            );

}
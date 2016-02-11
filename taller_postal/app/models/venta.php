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
     * @var datetime
     */
    public $fecha;

    /**
     * @var tinyint Max length is 4.
     */
    public $estado;

    /**
     * @var int Max length is 11.
     */
    public $datos_usuario_id;

    /**
     * @var int Max length is 11.
     */
    public $datos_usuario1_id;

    /**
     * @var varchar Max length is 10.
     */
    public $porcentaje_pago;

    /**
     * @var double
     */
    public $costo_envio;

    /**
     * @var double
     */
    public $sub_total;

    /**
     * @var int Max length is 11.
     */
    public $iva;

    /**
     * @var double
     */
    public $total;

    /**
     * @var double
     */
    public $otro_costos;

    public $table = 'venta';

    public $model = 'venta';
    public $primarykey = 'id';
    public $_fields = array('id','referencia','fecha','estado','datos_usuario_id','datos_usuario1_id','porcentaje_pago','costo_envio','sub_total','iva','total','otro_costos');

    public $has_one =  array(
                'datos_usuario' => array(
                  'class' => 'datos_usuario',
                  'other_field' => 'venta',
                  'join_other_as' => 'datos_usuario',
                  'join_self_as' => 'venta',
                  'join_table' => 'cms_datos_usuario',
                ),

                'datos_usuario1' => array(
                  'class' => 'datos_usuario1',
                  'other_field' => 'venta',
                  'join_other_as' => 'datos_usuario1',
                  'join_self_as' => 'venta',
                  'join_table' => 'cms_datos_usuario1',
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


    public function get_datos_usuario_list($campo="name",$where=array()) {
         $model = new datos_usuario();
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


    public function get_datos_usuario($join_retale="") {
         $model = new datos_usuario();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_venta_id($this->id);
         }else{
         	return $model->get_by_venta_id($this->id);
         }
    }

   
    public function selected_id($related_id = '', $related = 'modelo') {
        $obj = new $this->model();
        $obj->where_related($related, 'id', $related_id)->get();
        if ($obj->exists()) {
        	return $obj->id;
        } else {
        	return 0;
        }
    }


    public function selected_multiple_id($id = '', $related = 'modelo') {
        $obj = new $this->model();
        $obj->join_related($related)->get_by_id($id);
        $array = array();
        if ($obj->exists()) {
        	foreach ($obj as $value) {
        		$array[] = $value->{$related."_id"};
        	}
        }
        return $array;
    }


    /**
    * 
    * @param type $campo, nombre del campo a mostrar
    * @param type $group, nombre del grupo asociado, si $relate es NULL puede tomar cualquier nombre
    *                     de lo contrario tomara el nombre de un atributo o variable de la clase relacionada
    * @param type $related
    * @return type  array()
    *
    */
    public function get_select_multiple($campo = 'name', $group = 'ralate_name_group', $related = NULL) {
		$obj = new $this->model();
		$arrList = array();
		if ($related != NULL)
			$obj->join_related($related)->get();
		else
			$obj->get();

		foreach ($obj as $value) {
			if ($related != NULL)
				$group = $value->{$group};
			$arrList[$group][] = array('id' => $value->id, 'name' => $value->{$campo});
		}
		return $arrList;
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

                'fecha' => array(
                  'rules' => array( 'required' ),
                  'label' => 'FECHA',
                ),

                'estado' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'ESTADO',
                ),

                'datos_usuario_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'DATOSUSUARIO',
                ),

                'datos_usuario1_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'DATOSUSUARIO1',
                ),

                'porcentaje_pago' => array(
                  'rules' => array( 'max_length' => 10, 'required' ),
                  'label' => 'PORCENTAJEPAGO',
                ),

                'costo_envio' => array(
                  'rules' => array( 'required' ),
                  'label' => 'COSTOENVIO',
                ),

                'sub_total' => array(
                  'rules' => array( 'required' ),
                  'label' => 'SUBTOTAL',
                ),

                'iva' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IVA',
                ),

                'total' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TOTAL',
                ),

                'otro_costos' => array(
                  'rules' => array( 'required' ),
                  'label' => 'OTROCOSTOS',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|none',
                'referencia' => 'input|view|label#Ref.#|span#span3#',
                'fecha' => 'input|view|label#Fecha#|span#span3#',
                'estado' => 'inputcheck|view|label#Estado#|span#span3#',
                'datos_usuario_id' => 'combox|view|label#Comprador#|span#span3#',
                'datos_usuario1_id' => 'combox|view|label#Receptor#|span#span3#',
                'porcentaje_pago' => 'input|view|label#% Pago#|span#span3#',
                'costo_envio' => 'input_money|view|label#Costo de Envio#|span#span3#',
                'sub_total' => 'input_money|view|label#Sub Total#|span#span3#',
                'iva' => 'input|view|label#Iva#|span#span3#',
                'total' => 'input_money|view|label#Total#|span#span3#',
                'otro_costos' => 'input_money|view|label#Otros Costos#|span#span3#',
);

}
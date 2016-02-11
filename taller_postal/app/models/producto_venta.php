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
    public $producto_id;

    /**
     * @var int Max length is 11.
     */
    public $venta_id;

    /**
     * @var varchar Max length is 40.
     */
    public $cantidad;

    /**
     * @var varchar Max length is 100.
     */
    public $papel;

    /**
     * @var varchar Max length is 100.
     */
    public $color_papel;

    /**
     * @var varchar Max length is 40.
     */
    public $cantidad_sobre;

    /**
     * @var varchar Max length is 100.
     */
    public $color_sobre;

    /**
     * @var varchar Max length is 300.
     */
    public $color_diseno;

    /**
     * @var char Max length is 2.
     */
    public $impresion_dorso;

    /**
     * @var varchar Max length is 150.
     */
    public $tipo_sobre;

    /**
     * @var char Max length is 2.
     */
    public $stiker_cierre;

    /**
     * @var text
     */
    public $mensaje;

    /**
     * @var varchar Max length is 100.
     */
    public $tipo_envio;

    public $table = 'producto_venta';

    public $model = 'producto_venta';
    public $primarykey = 'id';
    public $_fields = array('id','producto_id','venta_id','cantidad','papel','color_papel','cantidad_sobre','color_sobre','color_diseno','impresion_dorso','tipo_sobre','stiker_cierre','mensaje','tipo_envio');

    public $has_one =  array(
                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'producto_venta',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'producto_venta',
                  'join_table' => 'cms_producto',
                ),

                'venta' => array(
                  'class' => 'venta',
                  'other_field' => 'producto_venta',
                  'join_other_as' => 'venta',
                  'join_self_as' => 'producto_venta',
                  'join_table' => 'cms_venta',
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
         	return $model->join_related($join_retale)->get_by_producto_venta_id($this->id);
         }else{
         	return $model->get_by_producto_venta_id($this->id);
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

                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                ),

                'venta_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'VENTA',
                ),

                'cantidad' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'CANTIDAD',
                ),

                'papel' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'PAPEL',
                ),

                'color_papel' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'COLORPAPEL',
                ),

                'cantidad_sobre' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'CANTIDADSOBRE',
                ),

                'color_sobre' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'COLORSOBRE',
                ),

                'color_diseno' => array(
                  'rules' => array( 'max_length' => 300 ),
                  'label' => 'COLORDISENO',
                ),

                'impresion_dorso' => array(
                  'rules' => array( 'max_length' => 2 ),
                  'label' => 'IMPRESIONDORSO',
                ),

                'tipo_sobre' => array(
                  'rules' => array( 'max_length' => 150 ),
                  'label' => 'TIPOSOBRE',
                ),

                'stiker_cierre' => array(
                  'rules' => array( 'max_length' => 2 ),
                  'label' => 'STIKERCIERRE',
                ),

                'tipo_envio' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'TIPOENVIO',
                )
            );


    public $coments =  array(
                'producto_id' => 'combox|view|label#Producto#|span#span3#',
                'venta_id' => 'combox|view|label#Venta#|span#span3#',
                'cantidad' => 'input|view|label#Cantidad#|span#span3#',
                'papel' => 'input|view|label#Papel#|span#span3#',
                'color_papel' => 'input|view|label#Color de Papel#|span#span3#',
                'cantidad_sobre' => 'input|view|label#Cantidad de Sobre#|span#span3#',
                'color_sobre' => 'input|view|label#Color de Sobre#|span#span3#',
                'color_diseno' => 'text|view|label#Detealle Color Diseñol#|span#span3#',
                'impresion_dorso' => 'input|view|label#Impresion Dorso#|span#span3#',
                'tipo_sobre' => 'input|view|label#Tipo Sobre#|span#span3#',
                'stiker_cierre' => 'input|view|label#Stiker de Cierre#|span#span3#',
                'mensaje' => 'text|view|label#Mensaje#|span#span3#',
                'tipo_envio' => 'input|view|label#Tipo de Envío#|span#span3#',
);

}
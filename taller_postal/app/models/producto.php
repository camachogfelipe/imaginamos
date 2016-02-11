<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class producto extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $tiutlo;

    /**
     * @var varchar Max length is 400.
     */
    public $texto;

    /**
     * @var double
     */
    public $precio;

    /**
     * @var double
     */
    public $precio_envio;

    /**
     * @var double
     */
    public $precio_stiker;
    
      /**
     * @var double
     */
    public $precio_cdiseno;

    /**
     * @var double
     */
    public $precio_idorso;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;

    /**
     * @var int Max length is 11.
     */
    public $disenador_id;

    public $table = 'producto';

    public $model = 'producto';
    public $primarykey = 'id';
    public $_fields = array('id','tiutlo','texto','precio','precio_envio','precio_stiker','precio_cdiseno','precio_idorso','categoria_id','disenador_id');

    public $has_one =  array(
                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'producto',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_categoria',
                ),

                'disenador' => array(
                  'class' => 'disenador',
                  'other_field' => 'producto',
                  'join_other_as' => 'disenador',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_disenador',
                )
            );



    public $has_many =  array(
                'color' => array(
                  'class' => 'color',
                  'other_field' => 'producto',
                  'join_other_as' => 'color',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_color_producto',
                ),

                'color_producto' => array(
                  'class' => 'color_producto',
                  'other_field' => 'producto',
                  'join_other_as' => 'color_producto',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_color_producto',
                ),

                'configuracion' => array(
                  'class' => 'configuracion',
                  'other_field' => 'producto',
                  'join_other_as' => 'configuracion',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_configuracion',
                ),

                'venta' => array(
                  'class' => 'producto',
                  'other_field' => 'producto',
                  'join_other_as' => 'venta',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_producto_venta',
                ),

                'producto_venta' => array(
                  'class' => 'producto_venta',
                  'other_field' => 'producto',
                  'join_other_as' => 'producto_venta',
                  'join_self_as' => 'producto',
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


    public function get_categoria_list($campo="name",$where=array()) {
         $model = new categoria();
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


    public function get_categoria($join_retale="") {
         $model = new categoria();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_producto_id($this->id);
         }else{
         	return $model->get_by_producto_id($this->id);
         }
    }
    
    public function get_color($join_retale="",$join_retale2="",$group_by="id" ) {
         $model = new color_producto();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->group_by($group_by)->join_related($join_retale2)->get_by_producto_id($this->id);
         }else{
         	return $model->get_by_producto_id($this->id);
         }
    }
    
    public function get_colores($join_retale=array(),$group_by="id" ) {
	//print_r($join_retale);
         $model = new color_producto();
         if($join_retale!=""){
             foreach ($join_retale as $related) {
                 $model->join_related($related);
             }
             return $model->group_by($group_by)->get_by_producto_id($this->id);
         }else{
             return $model->get_by_producto_id($this->id);
         }
    }


    public function get_disenador_list($campo="name",$where=array()) {
         $model = new disenador();
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


    public function get_disenador() {
         $model = new disenador();
         return $model->get_by_id($this->disenador_id);
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

                'tiutlo' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'TIUTLO',
                ),

                'texto' => array(
                  'rules' => array( 'max_length' => 400 ),
                  'label' => 'TEXTO',
                ),

                'precio' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIO',
                ),

                'precio_envio' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIOENVIO',
                ),

                'precio_stiker' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIOSTIKER',
                ),
                'precio_cdiseno' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIOCDISENO',
                ),

                'precio_idorso' => array(
                  'rules' => array( 'required' ),
                  'label' => 'PRECIOORSO',
                ),

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CATEGORIA',
                ),

                'disenador_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'DISENADOR',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|none',
                'tiutlo' => 'input|view|label#Nombre#|span#span3#',
                'texto' => 'text|view|label#Descripción#|span#span3#',
                'precio' => 'input_money|view|label#Precio#|span#span3#',
                'precio_envio' => 'input_money|view|label#Precio de Envio#|span#span3#',
                'precio_stiker' => 'input_money|view|label#Precio de Stiker#|span#span3#',
                'precio_cdiseno' => 'input_money|view|label#Precio Cambiar Color Diseño#|span#span3#',
                'precio_idorso' => 'input_money|view|label#Precio Impresion Dorso#|span#span3#',
                'categoria_id' => 'combox|view|label#Categoria#|span#span3#',
                'disenador_id' => 'combox|view|label#Diseñador#|span#span3#',
);

}
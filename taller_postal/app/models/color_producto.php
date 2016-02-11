<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class color_producto extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $color_id;

    /**
     * @var int Max length is 11.
     */
    public $producto_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var varchar Max length is 15.
     */
    public $label_img;

    /**
     * @var int Max length is 11.
     */
    public $imagen1_id;

    /**
     * @var varchar Max length is 15.
     */
    public $label_img1;

    /**
     * @var int Max length is 11.
     */
    public $imagen2_id;

    /**
     * @var varchar Max length is 15.
     */
    public $label_img2;

    /**
     * @var int Max length is 11.
     */
    public $imagen3_id;

    /**
     * @var varchar Max length is 15.
     */
    public $label_img3;

    /**
     * @var int Max length is 11.
     */
    public $imagen4_id;

    /**
     * @var varchar Max length is 15.
     */
    public $label_img4;

    public $table = 'color_producto';

    public $model = 'color_producto';
    public $primarykey = 'id';
    public $_fields = array('id','color_id','producto_id','imagen_id','label_img','imagen1_id','label_img1','imagen2_id','label_img2','imagen3_id','label_img3','imagen4_id','label_img4');

    public $has_one =  array(
                'color' => array(
                  'class' => 'color',
                  'other_field' => 'color_producto',
                  'join_other_as' => 'color',
                  'join_self_as' => 'color_producto',
                  'join_table' => 'cms_color',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'color_producto',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'color_producto',
                  'join_table' => 'cms_producto',
                ),

                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'color_producto',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'color_producto',
                  'join_table' => 'cms_imagen',
                ),

                'imagen1' => array(
                  'class' => 'imagen',
                  'other_field' => 'color_producto',
                  'join_other_as' => 'imagen1',
                  'join_self_as' => 'color_producto',
                  'join_table' => 'cms_imagen',
                ),

                'imagen2' => array(
                  'class' => 'imagen',
                  'other_field' => 'color_producto',
                  'join_other_as' => 'imagen2',
                  'join_self_as' => 'color_producto',
                  'join_table' => 'cms_imagen',
                ),

                'imagen3' => array(
                  'class' => 'imagen',
                  'other_field' => 'color_producto',
                  'join_other_as' => 'imagen3',
                  'join_self_as' => 'color_producto',
                  'join_table' => 'cms_imagen',
                ),

                'imagen4' => array(
                  'class' => 'imagen',
                  'other_field' => 'color_producto',
                  'join_other_as' => 'imagen4',
                  'join_self_as' => 'color_producto',
                  'join_table' => 'cms_imagen',
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


    public function get_color_list($campo="name",$where=array()) {
         $model = new color();
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


    public function get_color($join_retale="") {
         $model = new color();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_color_producto_id($this->id);
         }else{
         	return $model->get_by_color_producto_id($this->id);
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
         	return $model->join_related($join_retale)->get_by_color_producto_id($this->id);
         }else{
         	return $model->get_by_color_producto_id($this->id);
         }
    }


    public function get_imagen_list($campo="name",$where=array()) {
         $model = new imagen();
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


    public function get_imagen($join_retale="") {
         $model = new imagen();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_color_producto_id($this->id);
         }else{
         	return $model->get_by_color_producto_id($this->id);
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

                'color_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'COLOR',
                ),

                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'label_img' => array(
                  'rules' => array( 'max_length' => 15 ),
                  'label' => 'NOMBRE IMAGEN',
                ),

                'imagen1_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN1',
                ),

                'label_img1' => array(
                  'rules' => array( 'max_length' => 15 ),
                  'label' => 'NOMBRE IMAGEN1',
                ),

                'imagen2_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN2',
                ),

                'label_img2' => array(
                  'rules' => array( 'max_length' => 15 ),
                  'label' => 'NOMBRE IMAGEN2',
                ),

                'imagen3_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN3',
                ),

                'label_img3' => array(
                  'rules' => array( 'max_length' => 15 ),
                  'label' => 'NOMBRE IMAGEN3',
                ),

                'imagen4_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN4',
                ),

                'label_img4' => array(
                  'rules' => array( 'max_length' => 15 ),
                  'label' => 'NOMBRE IMAGEN4',
                )
            );



    public $coments =  array(
                'id' => 'inputhidden|none',
                'color_id' => 'combox|view|label#Color#|span#span3#',
                'producto_id' => 'combox|view|label#Producto#|span#span3#',
                'imagen_id' => 'imagen|label#Imgen1#|instructions#460px × 340px#',
                'imagen1_id' => 'imagen|label#Imgen2#|instructions#460px × 340px#',
                'imagen2_id' => 'imagen|label#Imgen3#|instructions#460px × 340px#',
                'imagen3_id' => 'imagen|label#Imgen4#|instructions#460px × 340px#',
                'imagen4_id' => 'imagen|label#Imgen5#|instructions#460px × 340px#',
                'label_img' => 'input|view|label#Nombre Imagen#|span#span3#',
                'label_img1' => 'input|view|label#Nombre Imagen1#|span#span3#',
                'label_img2' => 'input|view|label#Nombre Imagen2#|span#span3#',
                'label_img3' => 'input|view|label#Nombre Imagen3#|span#span3#',
                'label_img4' => 'input|view|label#Nombre Imagen4#|span#span3#',
);

}
<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class configuracion extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var tinyint Max length is 4.
     */
    public $view_papel;

    /**
     * @var tinyint Max length is 4.
     */
    public $view_color_papel;

    /**
     * @var tinyint Max length is 4.
     */
    public $view_papel_sobre;

    /**
     * @var tinyint Max length is 4.
     */
    public $view_color_sobre;

    /**
     * @var tinyint Max length is 4.
     */
    public $view_cambia_color;

    /**
     * @var tinyint Max length is 4.
     */
    public $view_impresion_dorso;

    /**
     * @var tinyint Max length is 4.
     */
    public $view_sobre;

    /**
     * @var tinyint Max length is 4.
     */
    public $view_stiker_cierre;

    /**
     * @var int Max length is 11.
     */
    public $producto_id;

    public $table = 'configuracion';

    public $model = 'configuracion';
    public $primarykey = 'id';
    public $_fields = array('id','view_papel','view_color_papel','view_papel_sobre','view_color_sobre','view_cambia_color','view_impresion_dorso','view_sobre','view_stiker_cierre','producto_id');

    public $has_one =  array(
                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'configuracion',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'configuracion',
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
         	return $model->join_related($join_retale)->get_by_configuracion_id($this->id);
         }else{
         	return $model->get_by_configuracion_id($this->id);
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

                'view_papel' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'VIEWPAPEL',
                ),

                'view_color_papel' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'VIEWCOLORPAPEL',
                ),

                'view_papel_sobre' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'VIEWPAPELSOBRE',
                ),

                'view_color_sobre' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'VIEWCOLORSOBRE',
                ),

                'view_cambia_color' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'VIEWCAMBIACOLOR',
                ),

                'view_impresion_dorso' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'VIEWIMPRESIONDORSO',
                ),

                'view_sobre' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'VIEWSOBRE',
                ),

                'view_stiker_cierre' => array(
                  'rules' => array( 'max_length' => 4 ),
                  'label' => 'VIEWSTIKERCIERRE',
                ),

                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|none',
                'view_papel' => 'inputcheck|view|label#Opcion Papel#|span#span3#',
                'view_color_papel' => 'inputcheck|view|label#Opcion Color Papel#|span#span3#',
                'view_papel_sobre' => 'inputcheck|view|label#Opcion Papel Sobre#|span#span3#',
                'view_color_sobre' => 'inputcheck|view|label#Opcion Color Sobre#|span#span3#',
                'view_cambia_color' => 'inputcheck|view|label#Opcion Color Diseño#|span#span3#',
                'view_impresion_dorso' => 'inputcheck|view|label#Opcion Impresion Dorso#|span#span3#',
                'view_sobre' => 'inputcheck|view|label#Opcion Sobre#|span#span3#',
                'view_stiker_cierre' => 'inputcheck|view|label#OpcionStiker de Cierrel#|span#span3#',
                'producto_id' => 'combox|view|label#Productol#|span#span3#',
);

}
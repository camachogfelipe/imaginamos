<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class categoria extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 20.
     */
    public $titulo;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;

    /**
     * @var int Max length is 11.
     */
    public $linea_id;

    public $table = 'categoria';

    public $model = 'categoria';
    public $primarykey = 'id';
    public $_fields = array('id','titulo','categoria_id','linea_id');

    public $has_one =  array(
                'categoria_basic' => array(
                  'class' => 'categoria',
                  'other_field' => 'categoria_recurrences',
                  'join_table' => 'cms_categoria',
                  'join_self_as' => 'categoria',
                  'join_other_as' => 'categoria',
                ),

                'linea' => array(
                  'class' => 'linea',
                  'other_field' => 'categoria',
                  'join_other_as' => 'linea',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_linea',
                )
            );



    public $has_many =  array(
                'categoria_recurrences' => array(
                  'class' => 'categoria',
                  'other_field' => 'categoria_basic',
                  'join_table' => 'cms_categoria',
                  'join_self_as' => 'categoria',
                  'join_other_as' => 'categoria',
                ),

                'cantidad' => array(
                  'class' => 'categoria',
                  'other_field' => 'categoria',
                  'join_other_as' => 'cantidad',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_categoria_cantidad',
                ),

                'categoria_cantidad' => array(
                  'class' => 'categoria_cantidad',
                  'other_field' => 'categoria',
                  'join_other_as' => 'categoria_cantidad',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_categoria_cantidad',
                ),

                'papel' => array(
                  'class' => 'categoria',
                  'other_field' => 'categoria',
                  'join_other_as' => 'papel',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_categoria_papel',
                ),

                'categoria_papel' => array(
                  'class' => 'categoria_papel',
                  'other_field' => 'categoria',
                  'join_other_as' => 'categoria_papel',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_categoria_papel',
                ),

                'sobre' => array(
                  'class' => 'categoria',
                  'other_field' => 'categoria',
                  'join_other_as' => 'sobre',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_categoria_sobre',
                ),

                'categoria_sobre' => array(
                  'class' => 'categoria_sobre',
                  'other_field' => 'categoria',
                  'join_other_as' => 'categoria_sobre',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_categoria_sobre',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'categoria',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_producto',
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
         	return $model->join_related($join_retale)->get_by_categoria_id($this->id);
         }else{
         	return $model->get_by_categoria_id($this->id);
         }
    }


    public function get_linea_list($campo="name",$where=array()) {
         $model = new linea();
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


    public function get_linea($join_retale="") {
         $model = new linea();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_categoria_id($this->id);
         }else{
         	return $model->get_by_categoria_id($this->id);
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

                'titulo' => array(
                  'rules' => array( 'max_length' => 20, 'required' ),
                  'label' => 'TITULO',
                ),

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'CATEGORIA',
                ),

                'linea_id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'LINEA',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|none',
                'titulo' => 'input|view|label#Titulo#|span#span3#',
                'categoria_id' => 'combox|view|label#Categoria#|span#span3#',
                'linea_id' => 'combox|view|label#Linea#|span#span3#',
);

}
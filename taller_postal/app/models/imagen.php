<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class imagen extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $path;

    /**
     * @var varchar Max length is 70.
     */
    public $name;

    public $table = 'imagen';

    public $model = 'imagen';
    public $primarykey = 'id';
    public $_fields = array('id','path','name');

    public $has_one = array();
    public $has_many =  array(
                'banner' => array(
                  'class' => 'banner',
                  'other_field' => 'imagen',
                  'join_other_as' => 'banner',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_banner',
                ),

                'color_producto' => array(
                  'class' => 'color_producto',
                  'other_field' => 'imagen',
                  'join_other_as' => 'color_producto',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_color_producto',
                ),

                'destacado' => array(
                  'class' => 'destacado',
                  'other_field' => 'imagen',
                  'join_other_as' => 'destacado',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_destacado',
                ),

                'disenador' => array(
                  'class' => 'disenador',
                  'other_field' => 'imagen',
                  'join_other_as' => 'disenador',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_disenador',
                ),

                'servicio' => array(
                  'class' => 'servicio',
                  'other_field' => 'imagen',
                  'join_other_as' => 'servicio',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_servicio',
                ),
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

                'path' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'PATH',
                ),

                'name' => array(
                  'rules' => array( 'max_length' => 70 ),
                  'label' => 'NAME',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|none',
);

}
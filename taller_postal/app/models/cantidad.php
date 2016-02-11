<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class cantidad extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $inico;

    public $table = 'cantidad';

    public $model = 'cantidad';
    public $primarykey = 'id';
    public $_fields = array('id','inico','fin');

    public $has_one = array();
    public $has_many =  array(
                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'cantidad',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'cantidad',
                  'join_table' => 'cms_categoria_cantidad',
                ),

                'categoria_cantidad' => array(
                  'class' => 'categoria_cantidad',
                  'other_field' => 'cantidad',
                  'join_other_as' => 'categoria_cantidad',
                  'join_self_as' => 'cantidad',
                  'join_table' => 'cms_categoria_cantidad',
                ),

                'sobre' => array(
                  'class' => 'sobre',
                  'other_field' => 'cantidad',
                  'join_other_as' => 'sobre',
                  'join_self_as' => 'cantidad',
                  'join_table' => 'cms_sobre_cantidad',
                ),

                'sobre_cantidad' => array(
                  'class' => 'sobre_cantidad',
                  'other_field' => 'cantidad',
                  'join_other_as' => 'sobre_cantidad',
                  'join_self_as' => 'cantidad',
                  'join_table' => 'cms_sobre_cantidad',
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

                'inico' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'INICO',
                ),
     );


    public $coments =  array(
                'id' => 'inputhidden|none',
                'inico' => 'input|view|label#Inicio de Rango#|span#span3#',
                'fin' => 'input|view|label#Fin de Rango#|span#span3#',
);

}
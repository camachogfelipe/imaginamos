<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class contacto extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $direccion;

    /**
     * @var varchar Max length is 40.
     */
    public $telefono;

    /**
     * @var varchar Max length is 18.
     */
    public $fax;

    /**
     * @var varchar Max length is 20.
     */
    public $celular;

    /**
     * @var varchar Max length is 50.
     */
    public $email;

    /**
     * @var varchar Max length is 40.
     */
    public $ciudad;

    /**
     * @var double
     */
    public $cordenada_x;

    /**
     * @var double
     */
    public $cordenada_y;

    public $table = 'contacto';

    public $model = 'contacto';
    public $primarykey = 'id';
    public $_fields = array('id','direccion','telefono','fax','celular','email','ciudad','cordenada_x','cordenada_y');

    public $has_one = array();
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

                'direccion' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'DIRECCION',
                ),

                'telefono' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'TELEFONO',
                ),

                'fax' => array(
                  'rules' => array( 'max_length' => 18 ),
                  'label' => 'FAX',
                ),

                'celular' => array(
                  'rules' => array( 'max_length' => 20 ),
                  'label' => 'CELULAR',
                ),

                'email' => array(
                  'rules' => array( 'max_length' => 50 ),
                  'label' => 'EMAIL',
                ),

                'ciudad' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'CIUDAD',
                ),

                'cordenada_x' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CORDENADAX',
                ),

                'cordenada_y' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CORDENADAY',
                )
            );


    public $coments =  array(
);

}
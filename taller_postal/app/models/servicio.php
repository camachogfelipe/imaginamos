<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class servicio extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var text
     */
    public $texto_primcipal;

    /**
     * @var text
     */
    public $texto_segundario;

    /**
     * @var varchar Max length is 100.
     */
    public $titulo_segundario;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen1_id;

    public $table = 'servicio';

    public $model = 'servicio';
    public $primarykey = 'id';
    public $_fields = array('id','texto_primcipal','texto_segundario','titulo_segundario','imagen_id','imagen1_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'servicio',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'servicio',
                  'join_table' => 'cms_imagen',
                ),

                'imagen1' => array(
                  'class' => 'imagen',
                  'other_field' => 'servicio',
                  'join_other_as' => 'imagen1',
                  'join_self_as' => 'servicio',
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
         	return $model->join_related($join_retale)->get_by_servicio_id($this->id);
         }else{
         	return $model->get_by_servicio_id($this->id);
         }
    }


    public function get_imagen1_list($campo="name",$where=array()) {
         $model = new imagen1();
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


    public function get_imagen1($join_retale="") {
         $model = new imagen1();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_servicio_id($this->id);
         }else{
         	return $model->get_by_servicio_id($this->id);
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

                'texto_primcipal' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TEXTOPRIMCIPAL',
                ),

                'titulo_segundario' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'TITULOSEGUNDARIO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'imagen1_id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'IMAGEN1',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|none',
                'texto_primcipal' => 'text|view|label#Texto Principal#|span#span6#',
                'texto_segundario' => 'text|view|label#Texto Segundariol#|span#span6#',
                'titulo_segundario' => 'input|view|label#Titulo#|span#span6#',
                'imagen_id' => 'imagen|view|label#Imagen Principal#|span#span6#',
                'imagen1_id' => 'imagen|view|label#Imagen Segundaria#|span#span6#',
);

}
<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class disenador extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 150.
     */
    public $nombre;

    /**
     * @var varchar Max length is 400.
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $municipios_id;

    public $table = 'disenador';

    public $model = 'disenador';
    public $primarykey = 'id';
    public $_fields = array('id','nombre','texto','imagen_id','municipios_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'disenador',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'disenador',
                  'join_table' => 'cms_imagen',
                ),

                'municipios' => array(
                  'class' => 'municipios',
                  'other_field' => 'disenador',
                  'join_other_as' => 'municipios',
                  'join_self_as' => 'disenador',
                  'join_table' => 'cms_municipios',
                ) , 
                
                'ciudad' => array(
                  'class' => 'ciudad',
                  'other_field' => 'disenador',
                  'join_other_as' => 'municipios',
                  'join_self_as' => 'disenador',
                  'join_table' => 'cms_ciudad',
                )
            );



    public $has_many =  array(
                'linea' => array(
                  'class' => 'disenador',
                  'other_field' => 'disenador',
                  'join_other_as' => 'linea',
                  'join_self_as' => 'disenador',
                  'join_table' => 'cms_disenador_linea',
                ),

                'disenador_linea' => array(
                  'class' => 'disenador_linea',
                  'other_field' => 'disenador',
                  'join_other_as' => 'disenador_linea',
                  'join_self_as' => 'disenador',
                  'join_table' => 'cms_disenador_linea',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'disenador',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'disenador',
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
         	return $model->join_related($join_retale)->get_by_disenador_id($this->id);
         }else{
         	return $model->get_by_disenador_id($this->id);
         }
    }
    
   public function get_linea($join_retale="") {
   	
   		$this->db->select( "DISTINCT ( l.titulo ) AS titulo" , false );
   		$this->db->from( "cms_producto p" );
   		$this->db->join( "cms_disenador d" , "d.id = p.disenador_id" );
   		$this->db->join( "cms_categoria c" , "c.id = p.categoria_id" );
   		$this->db->join( "cms_linea l" , "l.id = c.linea_id" );
   		$this->db->where( "d.id" , $this->id );

   		$query = $this->db->get( );
   		return $query->result( );
   	
   		/*
   		 * 
   		 * SELECT DISTINCT ( l.titulo ) AS tag
   		 * FROM cms_producto p 
   		 * INNER JOIN cms_disenador d ON d.id = p.disenador_id
   		 * INNER JOIN cms_categoria c ON c.id = p.categoria_id
   		 * INNER JOIN cms_linea l ON l.id = c.linea_id
   		 * 
   		 */
   	
         $model = new linea();
         if($join_retale!=""){
         	return $model->group_by('id')->join_related($join_retale)->get_by_disenador_id($this->id);
         }else{
         	return $model->get_by_disenador_id($this->id);
         }
    }


    public function get_municipios_list($campo="name",$where=array()) {
         $model = new ciudad();
         $model->where($where)->get();
         $arrList = array();
         foreach ($model as $k) {
         	$arrList [ ] = array(
         		'id' => $k->id,
         		'name' => $k->{$campo},
         	);
         }
         return $arrList;
    }


    public function get_municipios($join_retale="") {
         $model = new municipios();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_disenador_id($this->id);
         }else{
         	return $model->get_by_disenador_id($this->id);
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


    public function selected_multiple_id($id = '', $related = 'linea') {
        $obj = new $this->model();
        $obj->join_related($related)->get_by_id($this->id);
        $array = array();
        if ($obj->exists()) {
        	foreach ($obj as $value) {
                        $array[] = $value->{$related."_linea_id"};
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

                'nombre' => array(
                  'rules' => array( 'max_length' => 150 ),
                  'label' => 'NOMBRE',
                ),

                'texto' => array(
                  'rules' => array( 'max_length' => 1000 ),
                  'label' => 'TEXTO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'municipios_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'MUNICIPIOS',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|none',
                'nombre' => 'input|view|label#Nombre#|span#span6#',
                'texto' => 'text|view|label#Descripción#|span#span6#',
                'imagen_id' => 'imagen|view|label#Foto#|span#span6#',
                'municipios_id' => 'combox|view|label#Ciudad#|span#span6#',
);

}
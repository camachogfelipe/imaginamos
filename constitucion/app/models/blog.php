<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class blog extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $categorias_blog_id;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_titulo;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_subtitulo;

    /**
     * @var datetime
     */
    public $cms_fecha;

    /**
     * @var text
     */
    public $cms_texto;

    /**
     * @var binary Max length is 1.
     */
    public $cms_destacado;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'blog';

    public $model = 'blog';
    public $primarykey = 'id';
    public $_fields = array('id','categorias_blog_id','cms_titulo','cms_subtitulo','cms_fecha','cms_texto','cms_destacado','imagen_id');

    public $has_one =  array(
                'categorias_blog' => array(
                  'class' => 'categorias_blog',
                  'other_field' => 'blog',
                  'join_other_as' => 'categorias_blog',
                  'join_self_as' => 'blog',
                  'join_table' => 'cms_categorias_blog',
                ),

                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'blog',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'blog',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many =  array(
                'comentarios' => array(
                  'class' => 'comentarios',
                  'other_field' => 'blog',
                  'join_other_as' => 'comentarios',
                  'join_self_as' => 'blog',
                  'join_table' => 'cms_comentarios',
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


    public function get_categorias_blog_list($campo="name",$where=array()) {
         $model = new categorias_blog();
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


    public function get_categorias_blog($join_retale="") {
         $model = new categorias_blog();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_blog_id($this->id);
         }else{
         	return $model->get_by_blog_id($this->id);
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
         	return $model->join_related($join_retale)->get_by_blog_id($this->id);
         }else{
         	return $model->get_by_blog_id($this->id);
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
        		$array[] = $value->modelo_id;
        	}
        }
        return $array;
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

                'categorias_blog_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CATEGORIASBLOG',
                ),

                'cms_titulo' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'CMSTITULO',
                ),

                'cms_subtitulo' => array(
                  'rules' => array( 'max_length' => 45 ),
                  'label' => 'CMSSUBTITULO',
                ),

                'cms_fecha' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CMSFECHA',
                ),

                'cms_texto' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CMSTEXTO',
                ),

                'cms_destacado' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CMSDESTACADO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );


    public $coments =  array(
);

}
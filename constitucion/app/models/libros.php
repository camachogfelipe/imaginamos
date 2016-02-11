<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class libros extends DataMapper {

  /**
   * @var int Max length is 11.
   */
  public $id;

  /**
   * @var varchar Max length is 120.
   */
  public $cms_titulo;

  /**
   * @var varchar Max length is 250.
   */
  public $cms_autor;

  /**
   * @var decimal Max length is 10. ,0).
   */
  public $cms_preciopdf;

  /**
   * @var decimal Max length is 10. ,0).
   */
  public $cms_precioimpreso;

  /**
   * @var varchar Max length is 45.
   */
  public $cms_descripcion;

  /**
   * @var int Max length is 11.
   */
  public $imagen_id;

  /**
   * @var date
   */
  public $cms_fecha;

  /**
   * @var decimal Max length is 10. ,0).
   */
  public $cms_precioenvio;
  public $table = 'libros';
  public $model = 'libros';
  public $primarykey = 'id';
  public $_fields = array('id', 'cms_titulo', 'cms_autor', 'cms_preciopdf', 'cms_precioimpreso', 'cms_descripcion', 'imagen_id', 'cms_fecha', 'cms_precioenvio');
  public $has_one = array(
      'imagen' => array(
          'class' => 'imagen',
          'other_field' => 'libros',
          'join_other_as' => 'imagen',
          'join_self_as' => 'libros',
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
        $arrList = array('id' => $value->id, 'name' => $value->{$campo});
      }
      return $arrList;
    } else {
      return $obj->get_by_id($id);
    }
  }

  public function get_imagen_list($campo = "name", $where = array()) {
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

  public function get_imagen($join_retale = "") {
    $model = new imagen();
    if ($join_retale != "") {
      return $model->join_related($join_retale)->get_by_libros_id($this->id);
    } else {
      return $model->get_by_libros_id($this->id);
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

  public function get_rule($campo, $rule) {
    if (array_key_exists($rule, $this->validation[$campo]['rules']))
      return $this->validation[$campo]['rules'][$rule];
    else
      return false;
  }

  public function is_rule($campo, $rule) {
    if (in_array($rule, $this->validation[$campo]['rules']))
      return true;
    else
      return false;
  }

  public function to_array_first_row() {
    $model = clone $this;
    $model->get_by_id(1);
    $datos = array();
    foreach ($this->fields as $key) {
      if ($key != 'id')
        $datos[$key] = $model->{$key};
    }
    return $datos;
  }

  public $default_order_by = array('id' => 'desc');

  public function post_model_init($from_cache = FALSE) {
    
  }

  public function _encrypt($field) {
    if (!empty($this->{$field})) {
      if (empty($this->salt)) {
        $this->salt = md5(uniqid(rand(), true));
      }
      $this->{$field} = sha1($this->salt . $this->{$field});
    }
  }

  public $validation = array(
      'id' => array(
          'rules' => array('max_length' => 11),
          'label' => 'ID',
      ),
      'cms_titulo' => array(
          'rules' => array('max_length' => 120, 'required'),
          'label' => 'TÍTULO',
      ),
      'cms_autor' => array(
          'rules' => array('max_length' => 250, 'required'),
          'label' => 'AUTOR',
      ),
      'cms_preciopdf' => array(
          'rules' => array('required'),
          'label' => 'PRECIO PDF',
      ),
      'cms_precioimpreso' => array(
          'rules' => array('required'),
          'label' => 'PRECIO IMPRESO',
      ),
      'cms_descripcion' => array(
          'rules' => array('max_length' => 170, 'required'),
          'label' => 'DESCRIPCIÓN',
      ),
      'imagen_id' => array(
          'rules' => array('max_length' => 11, 'required'),
          'label' => 'IMAGEN',
      ),
      'cms_fecha' => array(
          'rules' => array('valid_date', 'required'),
          'label' => 'FECHA',
      ),
      'cms_precioenvio' => array(
          'rules' => array('required'),
          'label' => 'PRECIO ENVIO',
      )
  );
  public $coments = array(
  );

}

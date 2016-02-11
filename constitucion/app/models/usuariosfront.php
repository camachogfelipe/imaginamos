<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class usuariosfront extends DataMapper {

  /**
   * @var int Max length is 11.
   */
  public $id;

  /**
   * @var varchar Max length is 45.
   */
  public $cms_nombre;

  /**
   * @var varchar Max length is 45.
   */
  public $cms_apellidos;

  /**
   * @var enum 'F','M','O').
   */
  public $cms_genero;

  /**
   * @var int Max length is 11.
   */
  public $cms_fechanacimiento_dia;

  /**
   * @var int Max length is 11.
   */
  public $cms_fechanacimiento_mes;

  /**
   * @var int Max length is 11.
   */
  public $cms_fechanacimiento_anio;

  /**
   * @var varchar Max length is 250.
   */
  public $cms_email;

  /**
   * @var varchar Max length is 100.
   */
  public $cms_profesion;

  /**
   * @var varchar Max length is 45.
   */
  public $cms_pais;

  /**
   * @var varchar Max length is 45.
   */
  public $cms_ciudad;

  /**
   * @var varchar Max length is 45.
   */
  public $cms_telefono;

  /**
   * @var varchar Max length is 250.
   */
  public $cms_password;

  /**
   * @var enum 'Y','N').
   */
  public $cms_recibirinfo;

  /**
   * @var tinyint Max length is 1.
   */
  public $cms_activo;
  public $table = 'usuariosfront';
  public $model = 'usuariosfront';
  public $primarykey = 'id';
  public $_fields = array('id', 'cms_nombre', 'cms_apellidos', 'cms_genero', 'cms_fechanacimiento_dia', 'cms_fechanacimiento_mes', 'cms_fechanacimiento_anio', 'cms_email', 'cms_profesion', 'cms_pais', 'cms_ciudad', 'cms_telefono', 'cms_password', 'cms_recibirinfo', 'cms_activo');
  public $has_one = array();
  public $has_many = array(
      'carro_compras' => array(
          'class' => 'carro_compras',
          'other_field' => 'usuariosfront',
          'join_other_as' => 'carro_compras',
          'join_self_as' => 'usuariosfront',
          'join_table' => 'cms_carro_compras',
      ),
      'planes' => array(
          'class' => 'planes',
          'other_field' => 'usuariosfront',
          'join_other_as' => 'planes',
          'join_self_as' => 'usuariosfront',
          'join_table' => 'cms_planes_usuariosfront',
      ),
      'planes_usuariosfront' => array(
          'class' => 'planes_usuariosfront',
          'other_field' => 'usuariosfront',
          'join_other_as' => 'planes_usuariosfront',
          'join_self_as' => 'usuariosfront',
          'join_table' => 'cms_planes_usuariosfront',
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
        $arrList = array('id' => $value->id, 'name' => $value->{$campo});
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
      'cms_nombre' => array(
          'rules' => array('max_length' => 45),
          'label' => 'CMSNOMBRE',
      ),
      'cms_apellidos' => array(
          'rules' => array('max_length' => 45),
          'label' => 'CMSAPELLIDOS',
      ),
      'cms_fechanacimiento_dia' => array(
          'rules' => array('max_length' => 11),
          'label' => 'CMSFECHANACIMIENTODIA',
      ),
      'cms_fechanacimiento_mes' => array(
          'rules' => array('max_length' => 11),
          'label' => 'CMSFECHANACIMIENTOMES',
      ),
      'cms_fechanacimiento_anio' => array(
          'rules' => array('max_length' => 11),
          'label' => 'CMSFECHANACIMIENTOANIO',
      ),
      'cms_email' => array(
          'rules' => array('max_length' => 250),
          'label' => 'CMSEMAIL',
      ),
      'cms_profesion' => array(
          'rules' => array('max_length' => 100),
          'label' => 'CMSPROFESION',
      ),
      'cms_pais' => array(
          'rules' => array('max_length' => 45),
          'label' => 'CMSPAIS',
      ),
      'cms_ciudad' => array(
          'rules' => array('max_length' => 45),
          'label' => 'CMSCIUDAD',
      ),
      'cms_telefono' => array(
          'rules' => array('max_length' => 45),
          'label' => 'CMSTELEFONO',
      ),
      'cms_password' => array(
          'rules' => array('max_length' => 250),
          'label' => 'CMSPASSWORD',
      ),
      'cms_activo' => array(
          'rules' => array('max_length' => 1, 'required'),
          'label' => 'CMSACTIVO',
      )
  );
  public $coments = array(
  );

}

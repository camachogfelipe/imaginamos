<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Back_Controller extends CMS_Controller {

  protected $current_user;
  public $color_module = 'blue';  //blue, red, green, orange
  public $dirImg = "./uploads/";
  public $miga = array();
  public $current_menu = array();
  public $model = null;

  public function __construct() {

    // Si admin area esta definido y es verdadero, 
    // correr el condicional de admin area
    if (isset($this->admin_area)) {
      if (true === $this->admin_area)
        $this->admin_area();
    }

    parent::__construct();

    $this->has_perimisos();
    /** Current user * */
    $this->current_user = new \User;
    $this->current_user->get_by_id($this->session->userdata('user_id'));
    $this->_data['current_user'] = $this->current_user->to_array();
  }

  /**
   * 
   * @param type $module
   * @return type
   */
  protected function has_perimisos($module = NULL) {
    $perms = new \Permission;
    if (is_null($module))
      $module = ($this->uri->segment(2) ? $this->uri->segment(2) : 'home');

    if ($this->is_usuario())
      $perms->join_related('groups_permission')->where('cms_groups_permissions.group_id', '3')->get_by_name($module);

    if ($this->is_superadmin())
      $perms->join_related('groups_permission')->where('cms_groups_permissions.group_id', '1')->get_by_name($module);

    if ($this->is_admin())
      $perms->join_related('groups_permission')->where('cms_groups_permissions.group_id', '2')->get_by_name($module);

    if ($perms->exists()) {
      $this->_data['add'] = $perms->groups_permission_create;
      $this->_data['editar'] = $perms->groups_permission_update;
      $this->_data['delete'] = $perms->groups_permission_delete;
      if (!$perms->groups_permission_view) {
        $message = 'Permisos insuficientes para esta secci&oacuten.';
        return show_error($message, 403, 'Error de acceso al sistema');
      }
    } else {
      $this->_data['add'] = 1;
      $this->_data['delete'] = 1;
      $this->_data['editar'] = 1;
    }
  }

  /**
   * 
   * @param type $x
   * @param type $y
   * @return type
   */
  public function loadGoogleMaps($x, $y) {
    $this->load->library('googlemaps');
    $config['center'] = $x . ',' . $y;
    $config['zoom'] = 'auto';
    $this->googlemaps->initialize($config);
    $marker = array();
    $marker['position'] = $x . ',' . $y;
    $marker['draggable'] = true;
    $marker['ondragend'] = '$(\'.coordenada_x\').attr(\'value\', event.latLng.lat()); $(\'.coordenada_y\').attr(\'value\', event.latLng.lng());'
            . '$.post(\'contactos/edit_xy\', {field:$(\'.coordenada_x\').data(\'filed\'), value: $(\'.coordenada_x\').val(),field1:$(\'.coordenada_y\').data(\'filed\'), value1: $(\'.coordenada_y\').val()}, function(json) {
        }, \'json\');';
    $this->googlemaps->add_marker($marker);
    return $this->googlemaps->create_map();
  }

  /**
   * 
   * @param type $view
   * @param type $data
   * @return type
   */
  public function buildajax($view, $data = array()) {
    $data['add'] = $this->_data['add'];
    $data['delete'] = $this->_data['delete'];
    $data['editar'] = $this->_data['editar'];
    $data['color_module'] = $this->color_module;

    return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
  }

  /**
   * 
   * @param type $id
   */
  public function deleteImg($id) {
    if (is_array($id)) {
      foreach ($id as $i) {
        $img = new imagen();
        $img->get_by_id($i);
        if ($img->exists()) {
          $this->delete_files($img->path);
          $img->delete();
        }
      }
    } else {
      $img = new imagen();
      $img->get_by_id($id);
      if ($img->exists()) {
        $this->delete_files($img->path);
        $img->delete();
      }
    }
  }

  /**
   * 
   * @param type $obj
   * @param type $type
   * @param type $n_type
   * @return type
   */
  function data_id_obj_path(&$obj, $type = 'imagen', $n_type = 10) {
    $id_file = array();
    for ($i = 1; $i < $n_type; $i++) {
      $compare = $type . $i . "_id";
      if ($obj->{$compare . "_id"} != NUll) {
        $id_file[] = $obj->{$compare . "_id"};
      } else {
        break;
      }
    }
    return $id_file;
  }

  /**
   * 
   * @param type $obj
   * @param type $type
   * @param type $n_type
   * @return type
   */
  function data_file_path(&$obj, $type = 'file_path', $n_type = 10) {
    $id_file = array();
    for ($i = 1; $i < $n_type; $i++) {
      $compare = $type . $i;
      if ($obj->{$compare} != NUll) {
        $id_file[] = $obj->{$compare};
      } else {
        break;
      }
    }
    return $id_file;
  }

  /**
   * 
   * @param type $id
   * @param type $path
   * @param type $label
   * @param type $instructios
   * @param type $mult
   * @param type $required
   * @param type $span
   * @param type $n
   * @return type
   */
  public function imagen($id = "", $path = NULL, $label = "Imagen", $instructios = "0px x 0px", $mult = false, $required = true, $span = "span8", $n = 0) {
    $data['label_load_img'] = 'Cargar Imagen';
    $data['label_delete'] = 'Eliminar';
    $data['label_change'] = 'Cambiar';
    $data['title'] = $label;
    $data['imagen_id'] = $id;
    if (!is_null($path)) : $data['imagen64'] = $this->load_imagen($path);
    else : $data['imagen64'] = NULL;
    endif;
    $data['imagen_path'] = $path;
    $data['instrutions'] = $instructios;
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    $data['n'] = $n;
    if ($mult) {
      return $this->buildajax(ADMINPATH . 'component/template_img_mult', $data);
    }
    return $this->buildajax(ADMINPATH . 'component/template_img', $data);
  }

  /**
   * 
   * @param type $img_src
   * @return string
   */
  public function load_imagen($img_src = "") {
    $img_src = is_file($img_src) ? $img_src : "./uploads/dummy_150x150.gif";
    $imgbinary = fread(fopen($img_src, "r"), filesize($img_src));
    $img_str = base64_encode($imgbinary);
    $img = '<img id="img" src="data:image/jpg;base64,' . $img_str . '" />';
    return $img;
  }

  /**
   * 
   * @param type $dato
   * @param type $name
   * @param type $max_length
   * @param type $label
   * @param type $instructios
   * @param boolean $required
   * @param string $span
   * @return type
   */
  public function input($dato = "", $name = "", $max_length = 15, $label = "Texto", $instructios = "Maximo 200 caracteres", $required = true, $span = "span8", $span_text = "span8", $type = "text", $checked = false) {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['dato'] = $dato;
    $data['instrutions'] = $instructios;
    $data['max_length'] = $max_length;
    $data['type'] = $type;
    $data['class_span'] = $span;
    $data['span_text'] = $span_text;
    $data['class_required'] = ($required) ? "req" : "";
    $data['checked'] = $checked;
    return $this->buildajax(ADMINPATH . 'component/input', $data, $required = true, $span = "span8");
  }

  /**
   * 
   * @param type $dato
   * @param type $name
   * @param type $type_money
   * @param type $label
   * @param type $instructios
   * @param boolean $required
   * @param string $span
   * @return type
   */
  public function input_money($dato = "", $name = "", $type_money = "$", $label = "Texto", $instructios = "", $required = true, $span = "span8") {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['dato'] = $dato;
    $data['instrutions'] = $instructios;
    $data['add_on'] = $type_money;
    $data['type'] = "text";
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    return $this->buildajax(ADMINPATH . 'component/input_money', $data, $required = true, $span = "span8");
  }

  /**
   * 
   * @param type $dato
   * @param type $name
   * @param type $label
   * @param type $instructios
   * @param boolean $required
   * @param string $span
   * @return type
   */
  public function inputFile($dato = "", $name = "", $label = "Texto", $instructios = "Maximo 200 mb", $required = true, $span = "span8") {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['dato'] = $dato;
    $data['instrutions'] = $instructios;
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    return $this->buildajax(ADMINPATH . 'component/input_file', $data, $required = true, $span = "span8");
  }

  /**
   * @example 
   * $data['form_content'] .= $this->inputColor($obj->color, "color", "Color", "Formato Hexadecimal",$obj->is_rule("color","required"),"span2","hex"); 
   *
   * @param type $dato
   * @param type $name
   * @param type $label
   * @param type $instructios
   * @param boolean $required
   * @param string $span
   * @param type $formato
   * @return type
   */
  public function inputColor($dato = "", $name = "", $label = "Color", $instructios = "Formato Hexadecimal", $required = true, $span = "span2", $formato = "hex") {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['dato'] = is_null($dato) ? "#ffffff" : $dato;
    $data['instrutions'] = $instructios;
    $data['formato'] = $formato;
    $data['type'] = "text";
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    return $this->buildajax(ADMINPATH . 'component/input_color', $data, $required = true, $span = "span8");
  }

  /**
   *   Modo de USO
   *   
   *    
   * */

  /**
   * 
   * @example 
   *  $this->inputDate($obj->fecha, "fecha", "Fecha", "",$obj->is_rule("fecha","required"),"span2","dd/mm/yyyy"); 
   * @param type $dato
   * @param type $name
   * @param type $label
   * @param type $instructios
   * @param boolean $required
   * @param string $span
   * @param type $formato
   * @return type
   */
  public function inputDate($dato = "", $name = "", $label = "Fecha", $instructios = "", $required = true, $span = "span2", $formato = "dd/mm/yyyy") {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['dato'] = is_null($dato) ? date('d/m/Y') : $dato;
    $data['instrutions'] = $instructios;
    $data['formato'] = $formato;
    $data['type'] = "text";
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    return $this->buildajax(ADMINPATH . 'component/input_date', $data, $required = true, $span = "span8");
  }

  /**
   *   Modo de USO
   *    
   *   Modo de USO 2
   *   
   *  
   */

  /**
   * @example 
   *  $data['form_content'] .= $this->inputTime($obj->time, "time", "Hora", "Formato 24 Horas",$obj->is_rule("time","required"),"span2","tp-24h"); 
   *  $data['form_content'] .= $this->inputTime($obj->time, "time", "Hora", "Formato 12 Horas",$obj->is_rule("time","required"),"span2","tp-default"); 
   * @param type $dato
   * @param type $name
   * @param type $label
   * @param type $instructios
   * @param boolean $required
   * @param string $span
   * @param type $formato
   * @return type
   */
  public function inputTime($dato = "", $name = "", $label = "Fecha", $instructios = "Formato 12 Horas", $required = true, $span = "span2", $formato = "tp-default") {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['dato'] = is_null($dato) ? "12:00 AM" : $dato;
    $data['instrutions'] = $instructios;
    $data['formato'] = $formato;
    $data['type'] = "text";
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    return $this->buildajax(ADMINPATH . 'component/input_time', $data, $required = true, $span = "span8");
  }

  /**
   * @example $data['form_content'] .= $this->inputHidden($obj->id, "id",false); 
   * @param type $dato
   * @param type $name
   * @param type $max_length
   * @return type
   */
  public function inputHidden($dato = "", $name = "", $max_length = 15) {
    $data['name'] = $name;
    $data['dato'] = $dato;
    $data['max_length'] = $max_length;
    $data['type'] = "hidden";
    return $this->buildajax(ADMINPATH . 'component/input_hidden', $data);
  }

  /**
   * 
   * @param type $dato
   * @param type $name
   * @param type $label
   * @param type $instructios
   * @param type $required
   * @param type $span
   * @param type $wysiwg
   * @param type $count_text
   * @param type $count
   * @param type $cols
   * @param type $row
   * @return type
   */
  public function text($dato = "", $name = "", $label = "Texto", $instructios = "Maximo 200 caracteres", $required = true, $span = "span8", $wysiwg = false, $count_text = false, $count = "0", $cols = 3, $row = 6) {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['instrutions'] = $instructios;
    $data['dato'] = $dato;
    $data['count_text'] = $count_text;
    $data['wysiwg'] = $wysiwg;
    $data['count'] = $count;
    $data['cols'] = $cols;
    $data['row'] = $row;
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    return $this->buildajax(ADMINPATH . 'component/text', $data);
  }

  /**
   * 
   * @param type $select_id
   * @param type $datos
   * @param type $name
   * @param type $label
   * @param type $instructios
   * @param type $required
   * @param type $span
   * @return type
   */
  public function combox($select_id = 0, $datos = array(), $name = "", $label = "Lista", $instructios = "Seleccionar un items", $required = true, $span = "span8") {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['instrutions'] = $instructios;
    $data['select_id'] = $select_id;
    $data['datos'] = $datos;
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    return $this->buildajax(ADMINPATH . 'component/combox', $data);
  }

  /**
   * 
   * @param type $select_id
   * @param type $datos
   * @param type $name
   * @param type $label
   * @param type $instructios
   * @param type $required
   * @param type $span
   * @return type
   */
  public function select_multiple($select_id = array(), $datos = array(), $name = "", $label = "Lista", $instructios = "Seleccionar un items", $required = true, $span = "span8") {
    $data['title'] = $label;
    $data['name'] = $name;
    $data['instrutions'] = $instructios;
    $data['select_id'] = $select_id;
    $data['datos'] = $datos;
    $data['class_span'] = $span;
    $data['class_required'] = ($required) ? "req" : "";
    return $this->buildajax(ADMINPATH . 'component/select_multiple', $data);
  }

  /**
   * Build mejorado del Back
   * 
   * @param string $view
   * @param type $data
   * @return type
   */
  protected function build($view = 'body', $data = array()) {

    $this->_data['color_module'] = $this->color_module;
    // Is superadmin?
    $data['is_superadmin'] = $this->is_superadmin();
    // Public assets
    $this->_data['public_assets'] = $this->publicAssets;
    // Alert messages
    $alert_messages = $this->session->flashdata('alert_messages');
    if (empty($alert_messages)) {
      $alert_messages = $this->_alert_messages;
    }
    $this->_data['alert_messages'] = $alert_messages;
    $data = array_merge($data, $this->_data);
    return $this->template
                    ->set_partial('menu_panel', ADMINPATH . 'partials/beoro/menu')
                    ->set_partial('modals', ADMINPATH . 'partials/beoro/modals')
                    ->set_partial('toolbar', ADMINPATH . 'partials/beoro/toolbar')
                    ->set_layout(ADMINPATH . 'layouts/beoro')
                    ->build($view, $data);
  }

  // ----------------------------------------------------------------------

  protected function add_asset_module($asset = array(), $module = false) {
    return parent::add_asset_module($asset, $module, BACKPATH);
  }

  // ----------------------------------------------------------------------

  /**  custom method  
   * 
   * @param type $consulta
   * @return type
   */
  function getresult(&$consulta) {
    if ($consulta->num_rows() > 0) {
      foreach ($consulta->result() as $fila) {
        $data[] = $fila;
      }
      return $data;
    }
  }

  /**
   * 
   * @param type $obj
   * @name cargar variable a un modelo
   */
  public function loadVar(&$obj) {
    foreach ($obj->_fields as $key) {
      $default = NULL;
      try {
        if (!is_null($key) && $key != "id") {
          if (trim($this->_post($key)) !== "") {
            $default = $this->_post($key);
          } else {
            if ($obj->is_rule($key, "required")) {
              $default = "";
            }
          }
          $d = strpos($key, 'imagen');
          $i = 0;
          if ($d !== false or (strtolower($key) == 'imagen_id')) {
            $i = str_replace("_id", "", $key);
            $i = str_replace("imagen", "", $key);
            $i = (!is_numeric($i)) ? 0 : $i;
            $IMG = $this->cargarImagen("imagen", $i);
            $obj->{$key} = ($IMG != false) ? $IMG->id : $default;
          } else {
            $d = strpos(strtolower($key), 'path');
            if ($d !== false) {
              $IMG = $this->cargarFile($obj, $key);
              $obj->{$key} = ($IMG != false) ? $IMG : $default;
            } else {
              $obj->{$key} = $default;
            }
          }
        }
      } catch (Exception $exc) {
        $obj->{$key} = "";
      }
    }
  }

  /**
   * 
   * @param type $obj
   * @param type $key
   * @param type $formato
   * @param type $max_length
   * @return boolean
   */
  public function cargarFile(&$obj, $key = "", $formato = "pdf|cvs|xls|xlsx|doc|docx|ppt|jpg|png|gif|txt", $max_length = 8000000000000) {
    $dato = $this->simple_upload($key, $formato, $max_length);
    if ($dato != false) {
      $this->delete_files($obj->{$key});
      return $this->dirImg . $dato;
    }
    return false;
  }

  /**
   * 
   * @param type $file
   * @param type $type
   * @param type $tamano
   * @return boolean
   */
  function upload_file($file, $type, $tamano = 80000) {
    $data = false;
    $data = trim($this->simple_upload($file, $type, $tamano));
    if (!$data) {
      return false;
    } else {
      return $data;
    }
  }

  /**
   * 
   * @param type $obj1
   * @param type $class
   */
  public function loadobj(&$obj1, $class = '') {
    if (is_numeric(strpos($class, '_id'))) {
      $class = str_replace('_id', "", $class);
      $obj = new $class();
      $obj->get_by_id($obj1->{$class . "_id"});
      if ($obj->exists()) {
        $this->loadVar($obj);
        $obj->save();
      } else {
        $this->loadVar($obj);
        $obj->id = "";
        $obj->save();
      }
      $obj1->{$class . "_id"} = $obj->id;
    }
  }

  /**
   * 
   * @param type $class
   * @param type $n
   * @return imagen|boolean false
   */
  public function cargarImagen($class = "imagen", $n = 0, $tipo = "I") {
    $imagen = new $class();
    $imagen->get_by_path($this->_post($class . (($n != 0) ? $n : "") . "_id"));
    $dato = $this->simple_upload($class . (($n != 0) ? $n : "") . "_path");
    if ($imagen->exists()) {
      if ($dato !== FALSE) {
        $this->delete_files($imagen->path);
        $imagen->path = $this->dirImg . $dato;
        $imagen->tipo = $tipo;
        $imagen->save();
      }
    } else {
      if ($dato !== FALSE) {
        $imagen->id = "";
        $imagen->path = $this->dirImg . $dato;
        $imagen->tipo = $tipo;
        $imagen->save();
      } else {
        return false;
      }
    }
    return $imagen;
  }

  /**
   * 
   * @param type $field
   * @param type $types
   * @param type $maxsize
   * @param type $encryt
   * @return boolean
   */
  function simple_upload($field, $types = 'gif|jpg|png', $maxsize = 80000, $encryt = TRUE) {
    $archivo = $_FILES[$field]['name'];
    /* if ($maxsize != 0  AND  $_FILES[$field]['size'] > $maxsize)
      {
      return FALSE;
      } */
    $x = explode('.', $archivo);
    $type = end($x);
    $ty = explode('|', $types);
    if (!in_array($type, $ty, TRUE)) {
      return FALSE;
    }
    if ($archivo != "") {
      if ($encryt) {
        mt_srand();
        $destino = md5(uniqid(mt_rand())) . "." . $type;
      } else {
        $destino = $archivo;
      }
      if (!@move_uploaded_file($_FILES[$field]['tmp_name'], $this->dirImg . $destino)) {
        $destino = false;
      }
    } else {
      $destino = false;
    }
    // @unlink($_FILES[$field]['tmp_name']);
    return $destino;
  }

  /*
   * @param array
   * Modo de Uso:
   * $this->migas($this->menu);
   * 
   */

  public function migas($array = array()) {
    foreach ($array as $key => $variable) {
      $this->miga[] = $key;
      if (is_array($variable)) {
        $this->migas($variable);
      }
    }
  }

  /**
   * 
   * @param type $delete_files
   */
  public function delete_files($delete_files) {
    if (!is_array($delete_files)) {
      $delete_files = array($delete_files);
    }
    if (!empty($delete_files)) {
      foreach ($delete_files as $_delete_file) {
        if (!empty($_delete_file)) {
          $file = realpath($_delete_file);
          if (file_exists($file)) {
            @unlink($file);
          }
        }
      }
    }
  }

  /**
   * @author Elbert Tous
   * @param , type string, descripcion modelo a obtener
   * @param , type array key - value, descripcion conjunto de mensajes de errores y de exito 
   * @return string, json encode
   * @example, 
   *
   *   $msg = array('error_get' => 'Error al intentar cargar los datos');
   *   echo _get_json_datos($this->_mapper,$msg); 
   *
   * */
  public function _get_json_datos(&$object, $datos = array(), $msg = array()) {
    $result = array();
    if ($object->exists()) {
      $datos = array_merge($datos, $object->fields);
      foreach ($datos as $field) {
        $result[$field] = $object->{$field};
      }
      $result['ok'] = true;
    } else {
      $result['messages'] = isset($msg['error_get']) ? $msg['error_get'] : "Datos temporalmete no disponibles...! " . $object->error->string;
      $result['ok'] = false;
    }
    return json_encode($result);
  }

}

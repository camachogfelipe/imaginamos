<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050006
 */
class Modal_registro extends Front_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    return $this->buildajax();
  }

  public function registro() {
    $obj = new usuariosfront();
    $this->loadVar($obj); //echo "<pre>";print_r($obj);echo "</pre>";//exit();
    $obj->get_where(array("cms_email" => $obj->cms_email));
    if (!$obj->exists()) :
      $obj->id = "";
      $this->loadVar($obj);
      $obj->cms_activo = "0";
      $obj->planes_id = $this->_post('planes_id');
      $obj->cms_password = md5($obj->cms_password);
      if (!isset($obj->cms_recibirinfo) || $obj->cms_recibirinfo != "Y")
        $obj->cms_recibirinfo = "N";
      $error = false;
      $planes = new planes();
      if (!empty($obj->id))
        $planes->where('activo', 1)->get_by_usuariosfront_id($obj->id);
      else
        $planes->get_by_id($obj->planes_id); //echo "<pre>";print_r($obj);echo "</pre>";
      if (!$obj->save($planes)) {
        $error = true;
        $msg = $obj->error->string;
      }
      if ($error) :
        $this->_data['msg'] = "Error guardando datos," . $msg;
        $this->_data['error'] = true;
      else :
        $this->_data['msg'] = "Datos Guardados con exito...!";
        $this->_data['error'] = false;
      endif;
    else :
      $this->_data['msg'] = "El usuario ya existe";
      $this->_data['error'] = true;
    endif;
    return $this->buildajax();
  }

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

}

?>
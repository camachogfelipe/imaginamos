<?php

/**
 * @autor Felipe Camacho
 * @email felipe.camacho@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050006
 */
class Userfront extends Front_Controller {

  public function __construct() {
    $this->load->model('usuariosfront');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    parent::__construct();
  }

  public function index() {
    $this->_data['user'] = $this->session->userdata;
    /*echo "<pre>";
    print_r($this->_data['user']);
    echo "</pre>";*/
    if ($this->_data['logged'] === FALSE)
      redirect(base_url());
    $compras = new carro_compras();
    $compras->get_where(array("usuariosfront_id" => $this->_data['user']['id']));
    $compras = $compras->all_to_array();
    foreach($compras as $key=>$compra) :
      if($compra['cms_tipo'] == "L") :
        $libro = new libros();
        $libro->get_where(array("id" => $compra['cms_id']));
        $libro = $libro->all_to_array(array("cms_titulo"));
        $compras[$key]['cms_titulo'] = $libro[0]['cms_titulo'];
      else :
        $plan = new planes();
        $plan->get_where(array("id" => $compra['cms_id']));
        $plan = $plan->all_to_array(array("nombre_plan"));
        $compras[$key]['cms_titulo'] = $libro[0]['nombre_plan'];
      endif;
    endforeach;
    $this->_data['compras'] = $compras;
    return $this->build();
  }

  public function registro() {
    $usuariofront = new Usuariosfront();
    $usuariofront->id = $this->_post("id");
    $this->loadVar($usuariofront);
    if(empty($usuariofront->cms_password)) :
      unset($usuariofront->cms_password);
    else :
      $usuariofront->cms_password = md5($this->_post("cms_password"));
    endif;
    $plan_id = $this->_post('planes_id');
    $usuariofront->planes_id = $this->_post('planes_id');
    $planuser = new planes_usuariosfront();
    if (!empty($usuariofront->id))
      $planuser->where('activo', 1)->get_by_usuariosfront_id($usuariofront->id);
    else
      $planuser->get_by_id($usuariofront->id);
    //echo "<pre>";print_r($planuser);echo "</pre>";//exit();
    
    if ($planuser->planes_id != $plan_id) :
      $usuariofront->cms_activo = "0";
    else :
      $usuariofront->cms_activo = "1";
    endif;
    $planes = new planes();
    if (!empty($obj->id))
      $planes->where('activo', 1)->get_by_usuariosfront_id($usuariofront->id);
    else
      $planes->get_by_id($usuariofront->planes_id); //echo "<pre>";print_r($obj);echo "</pre>";
    
    $error = false;
    
    if (!$usuariofront->save($planes)) {
      $error = true;
      $msg = $usuariofront->error->string;
    }
    if ($error) :
      $this->_data['msg'] = "Error guardando datos," . $msg;
      $this->_data['error'] = true;
    else :
      $this->_data['msg'] = "Datos Guardados con exito... Vera sus datos actualizados en el proximo inicio de sesion.!";
      $this->_data['error'] = false;
    endif;
    $this->_data['user'] = $this->session->userdata;
    $compras = new carro_compras();
    $compras->get_where(array("usuariosfront_id" => $this->_data['user']['id']));
    $compras = $compras->all_to_array();
    foreach($compras as $key=>$compra) :
      if($compra['cms_tipo'] == "L") :
        $libro = new libros();
        $libro->get_where(array("id" => $compra['cms_id']));
        $libro = $libro->all_to_array(array("cms_titulo"));
        $compras[$key]['cms_titulo'] = $libro[0]['cms_titulo'];
      else :
        $plan = new planes();
        $plan->get_where(array("id" => $compra['cms_id']));
        $plan = $plan->all_to_array(array("nombre_plan"));
        $compras[$key]['cms_titulo'] = $libro[0]['nombre_plan'];
      endif;
    endforeach;
    $this->_data['compras'] = $compras;
    //echo "<pre>";print_r($this->_data['user']);echo "</pre>";exit();
    return $this->build();
  }

  public function loadVar(&$usuariofront) {
    foreach ($usuariofront->_fields as $key) {
      $default = NULL;
      try {
        if (!is_null($key) && $key != "id") {
          if (trim($this->_post($key)) !== "") {
            $default = $this->_post($key);
          } else {
            if ($usuariofront->is_rule($key, "required")) {
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
            $usuariofront->{$key} = ($IMG != false) ? $IMG->id : $default;
          } else {
            $d = strpos(strtolower($key), 'path');
            if ($d !== false) {
              $IMG = $this->cargarFile($usuariofront, $key);
              $usuariofront->{$key} = ($IMG != false) ? $IMG : $default;
            } else {
              $usuariofront->{$key} = $default;
            }
          }
        }
      } catch (Exception $exc) {
        $usuariofront->{$key} = "";
      }
    }
  }

}

?>
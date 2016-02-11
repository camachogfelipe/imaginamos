<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050006
 */
class Modal_registrarse extends Front_Controller {

  public function __construct() {
    $this->load->model('usuariosfront');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    parent::__construct();
  }

  public function index() {
    return $this->buildajax();
  }

  public function registro() {
    $user = $this->input->post('email');
    $pass = $this->input->post('clave');
    if (empty($user)) :
      $this->_data['msg'] = "La dirección de correo o la contraseña ingresados no son correctos.";
      return $this->buildajax();
    else :
      //definimos las reglas de validación
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('clave', 'Clave', 'required');
      if ($this->form_validation->run() == FALSE) :
        $this->_data['msg'] = "La dirección de correo o la contraseña ingresados no son correctos.<br>" . validation_errors();
        return $this->buildajax();
      else :
        $obj = new usuariosfront();
        $obj->cms_email = $this->input->post('email');
        $obj->cms_password = md5($this->input->post('clave'));
        $obj->get_where(array("cms_email" => $obj->cms_email, "cms_password" => $obj->cms_password));
        if (!$obj->exists()) :
          $this->_data['msg'] = "La dirección de correo o la contraseña ingresados no son correctos.";
          return $this->buildajax();
        else :
          $obj2 = new planes_usuariosfront();
          $obj->join_related("planes_usuariosfront")->where_related($obj2, 'activo', 'Y')->get_where(array("cms_email" => $obj->cms_email, "cms_password" => $obj->cms_password, "cms_activo" => "1"));//$obj->check_last_query();
          if (!$obj->exists()) :
            $this->_data['msg'] = "El usuario aún no esta activo, por favor intentelo en otra ocasión.";
            return $this->buildajax();
          else :
            $sesion_data = array();
            foreach ($obj->fields as $key) :
              $sesion_data[$key] = $obj->{$key};
            endforeach;
            $obj2->get_where(array("usuariosfront_id" => $sesion_data['id']));
            foreach ($obj2->fields as $key) :
              if ($key != "id")
                $sesion_data[$key] = $obj2->{$key};
            endforeach;
            //echo "<pre>";print_r($sesion_data);echo "</pre>";
            $this->session->set_userdata($sesion_data);
            $this->_data['logged'] = TRUE;
            return $this->buildajax();
          endif;
        endif;
      endif;
    endif;
    return $this->build();
  }

  public function logout() {
    //destruimos la sesión
    $this->session->sess_destroy();
    redirect(base_url());
  }
}

?>
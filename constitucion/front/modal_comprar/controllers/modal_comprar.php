<?php

/**
 * @autor Felipe Camacho
 * @email felipe.camacho@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050006
 */
class Modal_comprar extends Front_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $id = $this->uri->segment(2);
    $libro = new libros();
    $libro->join_related('imagen')->get_by_id($id);
    $this->_data['libro'] = $libro->to_array(array("id", "cms_titulo", "cms_autor", "cms_preciopdf", "cms_precioimpreso", "cms_precioenvio",
        "cms_descripcion", "imagen_path", "cms_fecha"));
    return $this->buildajax();
  }

  public function comprar() {
    $carro = new carro_compras();
    $carro->cms_id = $this->input->post("idlibro");
    $libro = new libros();
    $libro->get_by_id($carro->cms_id);
    $libro = $libro->to_array(array("cms_preciopdf", "cms_precioimpreso", "cms_precioenvio"));
    $carro->cms_tipo = "L";
    $carro->cms_tipolibro = $this->input->post("tipo");
    switch ($carro->cms_tipolibro) :
      case 'pdf' : $carro->cms_valorarticulo = $libro['cms_preciopdf']; $carro->cms_tipolibro = "P";
        break;
      case 'impreso' : $carro->cms_valorarticulo = $libro['cms_precioimpreso']; $carro->cms_tipolibro = "I";
        break;
      case 'pdf_impreso' : $carro->cms_valorarticulo = $libro['cms_preciopdf'] + $libro['cms_precioimpreso']; $carro->cms_tipolibro = "A";
        break;
    endswitch;
    $carro->cms_valorenvio = $libro['cms_precioenvio'];
    $carro->cms_fecha_compra = date("Y-m-d");
    if ($this->_data['logged'] === TRUE)
      $carro->usuariosfront_id = $this->session->userdata['id'];
    $carro->cms_nombres = $this->input->post("nombre");
    $carro->cms_apellidos = $this->input->post("apellidos");
    $carro->cms_direccion = $this->input->post("direccion");
    $carro->cms_ciudad = $this->input->post("ciudad");
    $carro->cms_telefono = $this->input->post("telefono");
    $carro->cms_pago = 0;
    $success = $carro->save();
    if (!$success) :
      $this->_data['error'] = true;
      $this->_data['msg'] = "Sus datos no se pudieron guardar, por favor intentelo más tarde. ".$carro->error->string;
    else :
      $this->_data['error'] = false;
      $this->_data['msg'] = "Su orden ha sido registrada con exito. Pronto lo contactaremos para darle la información de forma de pago.";
    endif;
    unset($libro);
    $libro = new libros();
    $libro->join_related('imagen')->get_by_id($carro->cms_id);
    $this->_data['libro'] = $libro->to_array(array("id", "cms_titulo", "cms_autor", "cms_preciopdf", "cms_precioimpreso", "cms_precioenvio",
        "cms_descripcion", "imagen_path", "cms_fecha"));
    return $this->buildajax();
  }

}

?>
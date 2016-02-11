<?php

/**
 * @author Felipe Camacho
 */
class _carro extends Back_Controller {

  protected $admin_area = true;
  public $model = 'carro_compras';
  public $name = "carro";

  public function __construct() {
    parent::__construct();
  }

  // ----------------------------------------------------------------------

  public function index() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $seccion = $this->uri->segment(3);
    if (empty($seccion))
      $this->home();
    return $this->build('_index', $data);
  }

  public function home() {
    $this->libros();
  }

  public function libros() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Carro de compras - Libros";
    $data['pag'] = 1;
    $data['breadcrum'] = array("Carro de compras", "Libros");
    $data['pag_content'] = $this->carro();
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function planes() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Carro de compras - Planes";
    $data['pag'] = 1;
    $data['breadcrum'] = array("Carro de compras", "Planes");
    $data['pag_content'] = $this->carro();
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function carro($seccion = "") {
    $data['path_delete'] = cms_url($this->name . '/delete');
    $data['path_add'] = cms_url($this->name . '/form_add');
    $data['path_edit'] = cms_url($this->name . '/form_edit');
    $data['path_list'] = cms_url($this->name . '/lista');
    $data['mpag_content'] = $this->lista();
    $data['pag'] = 1;
    $this->session->set_userdata('page_' . $this->name, '1');
    return $this->buildajax('_' . $this->name, $data);
  }

  public function form_edit() {
  }

  public function form_add() {
    
  }

  public function lista() {
    $seccion = $this->uri->segment(3);
		if($seccion == "pagar") $seccion = $this->uri->segment(4);
    $compras = new $this->model();
    $compras = new carro_compras();
    if($seccion == "libros") $compras->join_related("usuariosfront")->get_where(array("cms_tipo" => "L"));
    elseif($seccion == "planes") $compras->join_related("usuariosfront")->get_where(array("cms_tipo" => "P"));
    $compras = $compras->all_to_array();
    foreach($compras as $key=>$compra) :
      if($compra['cms_tipo'] == "L") :
        $libro = new libros();
        $libro->join_related("imagen")->get_where(array("id" => $compra['cms_id']));
        $libro = $libro->all_to_array(array("cms_titulo", "imagen_path"));
        $compras[$key]['cms_titulo'] = $libro[0]['cms_titulo'];
        $compras[$key]['imagen_path'] = $libro[0]['imagen_path'];
      else :
        $plan = new planes();
        $plan->get_where(array("id" => $compra['cms_id']));
        $plan = $plan->all_to_array(array("nombre_plan"));
        $compras[$key]['cms_titulo'] = $libro[0]['nombre_plan'];
      endif;
    endforeach;
    $data['datos'] = $compras;
		$data['seccion'] = $seccion;
    $data['direct_form'] = $this->name . "/" .  'pagar' . "/" . $seccion . "/";
		return $this->buildajax($this->name . '/lista', $data);
  }
	
	public function pagar() {
		$seccion = $this->uri->segment(4);
		$carro = new $this->model();
		$id = $this->uri->segment(5);
		$success = $carro->where("id", $id)->update('cms_pago', "Y");
		$this->$seccion();
	}

  public function add() {
  }

  public function delete() {
  }

}

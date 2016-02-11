<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050006
 */
class Demanda_constitucional extends Front_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    //cargamos datos
    $dem = new demandas_tutelas();
    $dem->order_by("id", "asc")->get_where(array("tipo" => "D"));
    $this->_data['demandas'] = $dem->all_to_array(array("id", "link_path", "cms_numeroref"));
    $dem->clear();
    $dem->select("DISTINCT(cms_anio) AS cms_anio")->order_by("cms_anio", "asc")->get_where(array("tipo" => "D"));
    $this->_data['anios'] = $dem->all_to_array(array("cms_anio"));
    $dem->clear();
    $dem->select("DISTINCT(cms_mes) AS cms_mes")->order_by("cms_mes", "asc")->get_where(array("tipo" => "D"));
    $this->_data['meses'] = $dem->all_to_array(array("cms_mes"));
    $dem->clear();
    $dem->order_by("id", "asc")->get_where(array("tipo" => "D"));
    $this->_data['demandas'] = $dem->all_to_array(array("id", "link_path", "cms_numeroref"));
    $mag = new magistrados();
    $mag->order_by("cms_nombre", "asc")->get();
    $this->_data['magistrados'] = $mag->all_to_array(array("id", "cms_nombre"));
    return $this->build();
  }

  public function buscar() {
    //Cargamos datos basicos
    $dem = new demandas_tutelas();
    $dem->select("DISTINCT(cms_anio) AS cms_anio")->order_by("cms_anio", "asc")->get_where(array("tipo" => "D"));
    $this->_data['anios'] = $dem->all_to_array(array("cms_anio"));
    $dem->clear();
    $dem->select("DISTINCT(cms_mes) AS cms_mes")->order_by("cms_mes", "asc")->get_where(array("tipo" => "D"));
    $this->_data['meses'] = $dem->all_to_array(array("cms_mes"));
    $mag = new magistrados();
    $mag->order_by("cms_nombre", "asc")->get();
    $this->_data['magistrados'] = $mag->all_to_array(array("id", "cms_nombre"));
    $dem->clear();
    //filtro por anio
    $anio = $this->input->post('anio');
    if (!empty($anio))
      $dem->where("cms_anio", $anio);
    //filtro por mes
    $mes = $this->input->post('mes');
    if (!empty($mes))
      $dem->where("cms_mes", $mes);
    //filtro por radicación
    $radicacion = $this->input->post('radicacion');
    if (!empty($radicacion))
      $dem->like("cms_numeroref", $radicacion);
    //filtro por magistrados
    $magistrado = $this->input->post('magistrado');
    if (!empty($magistrado))
      $dem->where("magistrados_id", $magistrado);
    //filtro por otros temas
    $demandante = $this->input->post('demandante');
    if (!empty($demandante))
      $dem->like("cms_demandante_accionante", $demandante);
    //filtro por norma demandada
    $norma = $this->input->post('norma');
    if (!empty($norma))
      $dem->like("cms_norma_demandada", $norma);
    $dem->order_by("id", "asc")->get_where(array("tipo" => "D"));
    $this->_data['demandas'] = $dem->all_to_array(array("id", "link_path", "cms_numeroref"));
    //$dem->check_last_query();
    return $this->build();
  }

}

?>
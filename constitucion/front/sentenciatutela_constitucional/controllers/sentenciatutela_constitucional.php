<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050006
 */
class Sentenciatutela_constitucional extends Front_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    //cargamos datos
    $sent = new sentencias();
    $sent->order_by("id", "asc")->get_where(array("tipo" => "T"));
    $this->_data['sentencias'] = $sent->all_to_array(array("id", "link_path", "demandas_tutelas_id", "cms_sentencia"));
    $sent->clear();
    $sent->select("DISTINCT(cms_tutela_derecho) AS cms_tutela_derecho")->order_by("cms_tutela_derecho", "asc")->get_where(array("tipo" => "T"));
    $this->_data['derechos'] = $sent->all_to_array(array("cms_tutela_derecho"));
    $sent->clear();
    $sent->select("DISTINCT(cms_decision) AS cms_decision")->order_by("cms_decision", "asc")->get_where(array("tipo" => "T"));
    $this->_data['decisiones'] = $sent->all_to_array(array("cms_decision"));
    $sent->clear();
    $sent->select("DISTINCT(cms_anio) AS cms_anio")->order_by("cms_anio", "asc")->get_where(array("tipo" => "T"));
    $this->_data['anios'] = $sent->all_to_array(array("cms_anio"));
    $sent->clear();
    $sent->select("DISTINCT(cms_mes) AS cms_mes")->order_by("cms_mes", "asc")->get_where(array("tipo" => "T"));
    $this->_data['meses'] = $sent->all_to_array(array("cms_mes"));
    $sent->clear();
    $mag = new magistrados();
    $mag->order_by("cms_nombre", "asc")->get();
    $this->_data['magistrados'] = $mag->all_to_array(array("id", "cms_nombre"));
    $temas = new temas();
    $temas->order_by("id", "asc")->get();
    $this->_data['temas'] = $temas->all_to_array(array("id", "cms_tema"));
    return $this->build();
  }

  public function buscar() {
    //Cargamos datos basicos
    $sent = new sentencias();
    $sent->select("DISTINCT(cms_decision) AS cms_decision")->order_by("cms_decision", "asc")->get_where(array("tipo" => "T"));
    $this->_data['decisiones'] = $sent->all_to_array(array("cms_decision"));
    $sent->clear();
    $sent->select("DISTINCT(cms_tutela_derecho) AS cms_tutela_derecho")->order_by("cms_tutela_derecho", "asc")->get_where(array("tipo" => "T"));
    $this->_data['derechos'] = $sent->all_to_array(array("cms_tutela_derecho"));
    $sent->clear();
    $sent->select("DISTINCT(cms_anio) AS cms_anio")->order_by("cms_anio", "asc")->get_where(array("tipo" => "T"));
    $this->_data['anios'] = $sent->all_to_array(array("cms_anio"));
    $sent->clear();
    $sent->select("DISTINCT(cms_mes) AS cms_mes")->order_by("cms_mes", "asc")->get_where(array("tipo" => "T"));
    $this->_data['meses'] = $sent->all_to_array(array("cms_mes"));
    $mag = new magistrados();
    $mag->order_by("cms_nombre", "asc")->get();
    $this->_data['magistrados'] = $mag->all_to_array(array("id", "cms_nombre"));
    $temas = new temas();
    $temas->order_by("id", "asc")->get();
    $this->_data['temas'] = $temas->all_to_array(array("id", "cms_tema"));
    $sent->clear();
    //filtro por anio
    $anio = $this->input->post('anio');
    if (!empty($anio))
      $sent->where("cms_anio", $anio);
    //filtro por mes
    $mes = $this->input->post('mes');
    if (!empty($mes))
      $sent->where("cms_mes", $mes);
    //filtro por decision
    $decision = $this->input->post('decision');
    if (!empty($decision))
      $sent->where("cms_decision", $decision);
    //filtro por expediente
    $expediente = $this->input->post('expediente');
    if (!empty($expediente))
      $sent->like("cms_tutela_expediente", $expediente);
    //filtro por sentencia
    $sentencia = $this->input->post('sentencia');
    if (!empty($sentencia))
      $sent->like("cms_sentencia", $sentencia);
    //filtro por magistrados
    $magistrado = $this->input->post('magistrado');
    if (!empty($magistrado))
      $sent->where("magistrado_id", $magistrado);
    //filtro por norma sentenciada
    $derecho = $this->input->post('derecho');
    if (!empty($derecho))
      $sent->where("cms_tutela_derecho", $derecho);
    //filtro por tema
    $tema = $this->input->post('tema');
    if (!empty($tema))
      $sent->join_related('temas', "cms_tema", $tema);
    $sent->order_by("id", "asc")->get_where(array("tipo" => "T"));
    $this->_data['sentencias'] = $sent->all_to_array(array("id", "link_path", "demandas_tutelas_id", "cms_sentencia"));
    //$sent->check_last_query();
    return $this->build();
  }

}

?>
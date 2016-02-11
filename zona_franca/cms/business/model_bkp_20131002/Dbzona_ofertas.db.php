<?php
/*
 * @file               : Dbzona_ofertas.db.php
 * @brief              : Clase para la interaccion con la tabla zona_ofertas
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_ofertas
 * @brief: Clase para la interaccion con la tabla zona_ofertas
 */

class Dbzona_ofertas extends DbDAO {

  public $id = NULL;
  protected $id_empresa = NULL;
  protected $txt_cargo = NULL;
  protected $txt_descripcion = NULL;
  protected $id_departamento = NULL;
  protected $id_ciudad = NULL;
  protected $id_area = NULL;
  protected $id_sector = NULL;
  protected $id_jerarquia = NULL;
  protected $num_vacantes = NULL;
  protected $txt_requisitos = NULL;
  protected $id_nivel_estudio = NULL;
  protected $id_area_aspi = NULL;
  protected $id_depto_aspi = NULL;
  protected $id_ciudad_aspi = NULL;
  protected $num_edad_aspi = NULL;
  protected $num_exp_aspi = NULL;
  protected $ind_visible = NULL;
  protected $ind_estado = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_empresa($mData = NULL) {
    if ($mData === NULL) { $this->id_empresa = NULL; }
    $this->id_empresa = StripHtml($mData);
  }

  public function settxt_cargo($mData = NULL) {
    if ($mData === NULL) { $this->txt_cargo = NULL; }
    $this->txt_cargo = StripHtml($mData);
  }

  public function settxt_descripcion($mData = NULL) {
    if ($mData === NULL) { $this->txt_descripcion = NULL; }
    $this->txt_descripcion = StripHtml($mData);
  }

  public function setid_departamento($mData = NULL) {
    if ($mData === NULL) { $this->id_departamento = NULL; }
    $this->id_departamento = StripHtml($mData);
  }

  public function setid_ciudad($mData = NULL) {
    if ($mData === NULL) { $this->id_ciudad = NULL; }
    $this->id_ciudad = StripHtml($mData);
  }

  public function setid_area($mData = NULL) {
    if ($mData === NULL) { $this->id_area = NULL; }
    $this->id_area = StripHtml($mData);
  }

  public function setid_sector($mData = NULL) {
    if ($mData === NULL) { $this->id_sector = NULL; }
    $this->id_sector = StripHtml($mData);
  }

  public function setid_jerarquia($mData = NULL) {
    if ($mData === NULL) { $this->id_jerarquia = NULL; }
    $this->id_jerarquia = StripHtml($mData);
  }

  public function setnum_vacantes($mData = NULL) {
    if ($mData === NULL) { $this->num_vacantes = NULL; }
    $this->num_vacantes = StripHtml($mData);
  }

  public function settxt_requisitos($mData = NULL) {
    if ($mData === NULL) { $this->txt_requisitos = NULL; }
    $this->txt_requisitos = StripHtml($mData);
  }

  public function setid_nivel_estudio($mData = NULL) {
    if ($mData === NULL) { $this->id_nivel_estudio = NULL; }
    $this->id_nivel_estudio = StripHtml($mData);
  }

  public function setid_area_aspi($mData = NULL) {
    if ($mData === NULL) { $this->id_area_aspi = NULL; }
    $this->id_area_aspi = StripHtml($mData);
  }

  public function setid_depto_aspi($mData = NULL) {
    if ($mData === NULL) { $this->id_depto_aspi = NULL; }
    $this->id_depto_aspi = StripHtml($mData);
  }

  public function setid_ciudad_aspi($mData = NULL) {
    if ($mData === NULL) { $this->id_ciudad_aspi = NULL; }
    $this->id_ciudad_aspi = StripHtml($mData);
  }

  public function setnum_edad_aspi($mData = NULL) {
    if ($mData === NULL) { $this->num_edad_aspi = NULL; }
    $this->num_edad_aspi = StripHtml($mData);
  }

  public function setnum_exp_aspi($mData = NULL) {
    if ($mData === NULL) { $this->num_exp_aspi = NULL; }
    $this->num_exp_aspi = StripHtml($mData);
  }

  public function setind_visible($mData = NULL) {
    if ($mData === NULL) { $this->ind_visible = NULL; }
    $this->ind_visible = StripHtml($mData);
  }

  public function setind_estado($mData = NULL) {
    if ($mData === NULL) { $this->ind_estado = NULL; }
    $this->ind_estado = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbzona_personas_experiencia.db.php
 * @brief              : Clase para la interaccion con la tabla zona_personas_experiencia
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_personas_experiencia
 * @brief: Clase para la interaccion con la tabla zona_personas_experiencia
 */

class Dbzona_personas_experiencia extends DbDAO {

  public $id = NULL;
  protected $id_persona = NULL;
  protected $txt_empresa = NULL;
  protected $txt_cargo = NULL;
  protected $id_arealab = NULL;
  protected $fec_ingreso = NULL;
  protected $ind_actual = NULL;
  protected $fec_finaliza = NULL;
  protected $id_departamento = NULL;
  protected $id_ciudad = NULL;
  protected $txt_telefono = NULL;
  protected $txt_funciones = NULL;
  protected $ind_estado = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_persona($mData = NULL) {
    if ($mData === NULL) { $this->id_persona = NULL; }
    $this->id_persona = StripHtml($mData);
  }

  public function settxt_empresa($mData = NULL) {
    if ($mData === NULL) { $this->txt_empresa = NULL; }
    $this->txt_empresa = StripHtml($mData);
  }

  public function settxt_cargo($mData = NULL) {
    if ($mData === NULL) { $this->txt_cargo = NULL; }
    $this->txt_cargo = StripHtml($mData);
  }

  public function setid_arealab($mData = NULL) {
    if ($mData === NULL) { $this->id_arealab = NULL; }
    $this->id_arealab = StripHtml($mData);
  }

  public function setfec_ingreso($mData = NULL) {
    if ($mData === NULL) { $this->fec_ingreso = NULL; }
    $this->fec_ingreso = StripHtml($mData);
  }

  public function setind_actual($mData = NULL) {
    if ($mData === NULL) { $this->ind_actual = NULL; }
    $this->ind_actual = StripHtml($mData);
  }

  public function setfec_finaliza($mData = NULL) {
    if ($mData === NULL) { $this->fec_finaliza = NULL; }
    $this->fec_finaliza = StripHtml($mData);
  }

  public function setid_departamento($mData = NULL) {
    if ($mData === NULL) { $this->id_departamento = NULL; }
    $this->id_departamento = StripHtml($mData);
  }

  public function setid_ciudad($mData = NULL) {
    if ($mData === NULL) { $this->id_ciudad = NULL; }
    $this->id_ciudad = StripHtml($mData);
  }

  public function settxt_telefono($mData = NULL) {
    if ($mData === NULL) { $this->txt_telefono = NULL; }
    $this->txt_telefono = StripHtml($mData);
  }

  public function settxt_funciones($mData = NULL) {
    if ($mData === NULL) { $this->txt_funciones = NULL; }
    $this->txt_funciones = StripHtml($mData);
  }

  public function setind_estado($mData = NULL) {
    if ($mData === NULL) { $this->ind_estado = NULL; }
    $this->ind_estado = StripHtml($mData);
  }

}
?>
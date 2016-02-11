<?php
/*
 * @file               : Dbzona_empresas.db.php
 * @brief              : Clase para la interaccion con la tabla zona_empresas
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-18
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_empresas
 * @brief: Clase para la interaccion con la tabla zona_empresas
 */

class Dbzona_empresas extends DbDAO {

  public $id = NULL;
  protected $id_registrado = NULL;
  protected $txt_nom_comercial = NULL;
  protected $txt_razon_social = NULL;
  protected $id_ramo = NULL;
  protected $txt_ramo_2 = NULL;
  protected $txt_direccion = NULL;
  protected $id_departamento = NULL;
  protected $id_ciudad = NULL;
  protected $txt_nit = NULL;
  protected $txt_website = NULL;
  protected $txt_descripcion = NULL;
  protected $fil_logo = NULL;
  protected $ind_estado = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_registrado($mData = NULL) {
    if ($mData === NULL) { $this->id_registrado = NULL; }
    $this->id_registrado = StripHtml($mData);
  }

  public function settxt_nom_comercial($mData = NULL) {
    if ($mData === NULL) { $this->txt_nom_comercial = NULL; }
    $this->txt_nom_comercial = StripHtml($mData);
  }

  public function settxt_razon_social($mData = NULL) {
    if ($mData === NULL) { $this->txt_razon_social = NULL; }
    $this->txt_razon_social = StripHtml($mData);
  }

  public function setid_ramo($mData = NULL) {
    if ($mData === NULL) { $this->id_ramo = NULL; }
    $this->id_ramo = StripHtml($mData);
  }

  public function settxt_ramo_2($mData = NULL) {
    if ($mData === NULL) { $this->txt_ramo_2 = NULL; }
    $this->txt_ramo_2 = StripHtml($mData);
  }

  public function settxt_direccion($mData = NULL) {
    if ($mData === NULL) { $this->txt_direccion = NULL; }
    $this->txt_direccion = StripHtml($mData);
  }

  public function setid_departamento($mData = NULL) {
    if ($mData === NULL) { $this->id_departamento = NULL; }
    $this->id_departamento = StripHtml($mData);
  }

  public function setid_ciudad($mData = NULL) {
    if ($mData === NULL) { $this->id_ciudad = NULL; }
    $this->id_ciudad = StripHtml($mData);
  }

  public function settxt_nit($mData = NULL) {
    if ($mData === NULL) { $this->txt_nit = NULL; }
    $this->txt_nit = StripHtml($mData);
  }

  public function settxt_website($mData = NULL) {
    if ($mData === NULL) { $this->txt_website = NULL; }
    $this->txt_website = StripHtml($mData);
  }

  public function settxt_descripcion($mData = NULL) {
    if ($mData === NULL) { $this->txt_descripcion = NULL; }
    $this->txt_descripcion = StripHtml($mData);
  }

  public function setfil_logo($mData = NULL) {
    if ($mData === NULL) { $this->fil_logo = NULL; }
    $this->fil_logo = StripHtml($mData);
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
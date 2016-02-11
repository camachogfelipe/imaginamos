<?php
/*
 * @file               : Dbzona_empresas_contacto.db.php
 * @brief              : Clase para la interaccion con la tabla zona_empresas_contacto
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-09
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_empresas_contacto
 * @brief: Clase para la interaccion con la tabla zona_empresas_contacto
 */

class Dbzona_empresas_contacto extends DbDAO {

  public $id = NULL;
  protected $id_empresa = NULL;
  protected $txt_prim_nom = NULL;
  protected $txt_seg_nom = NULL;
  protected $txt_prim_apell = NULL;
  protected $txt_seg_apell = NULL;
  protected $id_genero = NULL;
  protected $fec_nacimiento = NULL;
  protected $txt_cargo = NULL;
  protected $txt_telefono = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_empresa($mData = NULL) {
    if ($mData === NULL) { $this->id_empresa = NULL; }
    $this->id_empresa = StripHtml($mData);
  }

  public function settxt_prim_nom($mData = NULL) {
    if ($mData === NULL) { $this->txt_prim_nom = NULL; }
    $this->txt_prim_nom = StripHtml($mData);
  }

  public function settxt_seg_nom($mData = NULL) {
    if ($mData === NULL) { $this->txt_seg_nom = NULL; }
    $this->txt_seg_nom = StripHtml($mData);
  }

  public function settxt_prim_apell($mData = NULL) {
    if ($mData === NULL) { $this->txt_prim_apell = NULL; }
    $this->txt_prim_apell = StripHtml($mData);
  }

  public function settxt_seg_apell($mData = NULL) {
    if ($mData === NULL) { $this->txt_seg_apell = NULL; }
    $this->txt_seg_apell = StripHtml($mData);
  }

  public function setid_genero($mData = NULL) {
    if ($mData === NULL) { $this->id_genero = NULL; }
    $this->id_genero = StripHtml($mData);
  }

  public function setfec_nacimiento($mData = NULL) {
    if ($mData === NULL) { $this->fec_nacimiento = NULL; }
    $this->fec_nacimiento = StripHtml($mData);
  }

  public function settxt_cargo($mData = NULL) {
    if ($mData === NULL) { $this->txt_cargo = NULL; }
    $this->txt_cargo = StripHtml($mData);
  }

  public function settxt_telefono($mData = NULL) {
    if ($mData === NULL) { $this->txt_telefono = NULL; }
    $this->txt_telefono = StripHtml($mData);
  }

}
?>
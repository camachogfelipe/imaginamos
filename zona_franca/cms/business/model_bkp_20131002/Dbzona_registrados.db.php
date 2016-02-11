<?php
/*
 * @file               : Dbzona_registrados.db.php
 * @brief              : Clase para la interaccion con la tabla zona_registrados
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-22
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_registrados
 * @brief: Clase para la interaccion con la tabla zona_registrados
 */

class Dbzona_registrados extends DbDAO {

  public $id = NULL;
  protected $id_tipo = NULL;
  protected $txt_nickname = NULL;
  protected $txt_email = NULL;
  protected $txt_passwd = NULL;
  protected $fil_image = NULL;
  protected $ind_privaci = NULL;
  protected $ind_estado = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_tipo($mData = NULL) {
    if ($mData === NULL) { $this->id_tipo = NULL; }
    $this->id_tipo = StripHtml($mData);
  }

  public function settxt_nickname($mData = NULL) {
    if ($mData === NULL) { $this->txt_nickname = NULL; }
    $this->txt_nickname = StripHtml($mData);
  }

  public function settxt_email($mData = NULL) {
    if ($mData === NULL) { $this->txt_email = NULL; }
    $this->txt_email = StripHtml($mData);
  }

  public function settxt_passwd($mData = NULL) {
    if ($mData === NULL) { $this->txt_passwd = NULL; }
    $this->txt_passwd = StripHtml($mData);
  }

  public function setfil_image($mData = NULL) {
    if ($mData === NULL) { $this->fil_image = NULL; }
    $this->fil_image = StripHtml($mData);
  }

  public function setind_privaci($mData = NULL) {
    if ($mData === NULL) { $this->ind_privaci = NULL; }
    $this->ind_privaci = StripHtml($mData);
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
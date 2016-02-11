<?php
/*
 * @file               : Dbcms_secciones.db.php
 * @brief              : Clase para la interaccion con la tabla cms_secciones
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_secciones
 * @brief: Clase para la interaccion con la tabla cms_secciones
 */

class Dbcms_secciones extends DbDAO {

  public $id = NULL;
  protected $txt_nombre = NULL;
  protected $txt_descripcion = NULL;
  protected $id_padre = NULL;
  protected $txt_seccion = NULL;
  protected $txt_otro = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settxt_nombre($mData = NULL) {
    if ($mData === NULL) { $this->txt_nombre = NULL; }
    $this->txt_nombre = StripHtml($mData);
  }

  public function settxt_descripcion($mData = NULL) {
    if ($mData === NULL) { $this->txt_descripcion = NULL; }
    $this->txt_descripcion = StripHtml($mData);
  }

  public function setid_padre($mData = NULL) {
    if ($mData === NULL) { $this->id_padre = NULL; }
    $this->id_padre = StripHtml($mData);
  }

  public function settxt_seccion($mData = NULL) {
    if ($mData === NULL) { $this->txt_seccion = NULL; }
    $this->txt_seccion = StripHtml($mData);
  }

  public function settxt_otro($mData = NULL) {
    if ($mData === NULL) { $this->txt_otro = NULL; }
    $this->txt_otro = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
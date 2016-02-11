<?php
/*
 * @file               : Dbcms_modulos.db.php
 * @brief              : Clase para la interaccion con la tabla cms_modulos
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_modulos
 * @brief: Clase para la interaccion con la tabla cms_modulos
 */

class Dbcms_modulos extends DbDAO {

  public $id = NULL;
  protected $txt_nombre = NULL;
  protected $txt_clase = NULL;
  protected $txt_descripcion = NULL;
  protected $fil_image = NULL;
  protected $ind_show = NULL;
  protected $ind_estado = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settxt_nombre($mData = NULL) {
    if ($mData === NULL) { $this->txt_nombre = NULL; }
    $this->txt_nombre = StripHtml($mData);
  }

  public function settxt_clase($mData = NULL) {
    if ($mData === NULL) { $this->txt_clase = NULL; }
    $this->txt_clase = StripHtml($mData);
  }

  public function settxt_descripcion($mData = NULL) {
    if ($mData === NULL) { $this->txt_descripcion = NULL; }
    $this->txt_descripcion = StripHtml($mData);
  }

  public function setfil_image($mData = NULL) {
    if ($mData === NULL) { $this->fil_image = NULL; }
    $this->fil_image = StripHtml($mData);
  }

  public function setind_show($mData = NULL) {
    if ($mData === NULL) { $this->ind_show = NULL; }
    $this->ind_show = StripHtml($mData);
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
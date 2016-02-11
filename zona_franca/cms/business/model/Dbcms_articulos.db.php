<?php
/*
 * @file               : Dbcms_articulos.db.php
 * @brief              : Clase para la interaccion con la tabla cms_articulos
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_articulos
 * @brief: Clase para la interaccion con la tabla cms_articulos
 */

class Dbcms_articulos extends DbDAO {

  public $id = NULL;
  protected $id_tipo = NULL;
  protected $txt_titulo = NULL;
  protected $txt_descripcion = NULL;
  protected $fil_image = NULL;
  protected $fil_video = NULL;
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

  public function settxt_titulo($mData = NULL) {
    if ($mData === NULL) { $this->txt_titulo = NULL; }
    $this->txt_titulo = StripHtml($mData);
  }

  public function settxt_descripcion($mData = NULL) {
    if ($mData === NULL) { $this->txt_descripcion = NULL; }
    $this->txt_descripcion = StripHtml($mData);
  }

  public function setfil_image($mData = NULL) {
    if ($mData === NULL) { $this->fil_image = NULL; }
    $this->fil_image = StripHtml($mData);
  }

  public function setfil_video($mData = NULL) {
    if ($mData === NULL) { $this->fil_video = NULL; }
    $this->fil_video = StripHtml($mData);
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
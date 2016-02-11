<?php
/*
 * @file               : Dbcms_secciones_articulo.db.php
 * @brief              : Clase para la interaccion con la tabla cms_secciones_articulo
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-03
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_secciones_articulo
 * @brief: Clase para la interaccion con la tabla cms_secciones_articulo
 */

class Dbcms_secciones_articulo extends DbDAO {

  public $id = NULL;
  protected $id_seccion = NULL;
  protected $txt_titulo = NULL;
  protected $txt_descripcion = NULL;
  protected $fil_image = NULL;
  protected $ind_posicion = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_seccion($mData = NULL) {
    if ($mData === NULL) { $this->id_seccion = NULL; }
    $this->id_seccion = StripHtml($mData);
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

  public function setind_posicion($mData = NULL) {
    if ($mData === NULL) { $this->ind_posicion = NULL; }
    $this->ind_posicion = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
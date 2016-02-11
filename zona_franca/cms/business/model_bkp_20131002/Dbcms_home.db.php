<?php
/*
 * @file               : Dbcms_home.db.php
 * @brief              : Clase para la interaccion con la tabla cms_home
 * @version            : 3.3
 * @ultima_modificacion: 2013-09-17
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_home
 * @brief: Clase para la interaccion con la tabla cms_home
 */

class Dbcms_home extends DbDAO {

  public $id = NULL;
  protected $txt_titulo = NULL;
  protected $txt_subtitulo = NULL;
  protected $fil_image = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settxt_titulo($mData = NULL) {
    if ($mData === NULL) { $this->txt_titulo = NULL; }
    $this->txt_titulo = StripHtml($mData);
  }

  public function settxt_subtitulo($mData = NULL) {
    if ($mData === NULL) { $this->txt_subtitulo = NULL; }
    $this->txt_subtitulo = StripHtml($mData);
  }

  public function setfil_image($mData = NULL) {
    if ($mData === NULL) { $this->fil_image = NULL; }
    $this->fil_image = StripHtml($mData);
  }

}
?>
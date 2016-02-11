<?php
/*
 * @file               : Dbcms_contacto.db.php
 * @brief              : Clase para la interaccion con la tabla cms_contacto
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_contacto
 * @brief: Clase para la interaccion con la tabla cms_contacto
 */

class Dbcms_contacto extends DbDAO {

  public $id = NULL;
  protected $txt_telefono = NULL;
  protected $txt_email = NULL;
  protected $txt_twitter = NULL;
  protected $txt_facebook = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settxt_telefono($mData = NULL) {
    if ($mData === NULL) { $this->txt_telefono = NULL; }
    $this->txt_telefono = StripHtml($mData);
  }

  public function settxt_email($mData = NULL) {
    if ($mData === NULL) { $this->txt_email = NULL; }
    $this->txt_email = StripHtml($mData);
  }

  public function settxt_twitter($mData = NULL) {
    if ($mData === NULL) { $this->txt_twitter = NULL; }
    $this->txt_twitter = StripHtml($mData);
  }

  public function settxt_facebook($mData = NULL) {
    if ($mData === NULL) { $this->txt_facebook = NULL; }
    $this->txt_facebook = StripHtml($mData);
  }

}
?>
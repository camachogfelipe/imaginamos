<?php
/*
 * @file               : Dbcms_usuarios.db.php
 * @brief              : Clase para la interaccion con la tabla cms_usuarios
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_usuarios
 * @brief: Clase para la interaccion con la tabla cms_usuarios
 */

class Dbcms_usuarios extends DbDAO {

  public $id = NULL;
  protected $id_rol = NULL;
  protected $txt_nombre = NULL;
  protected $txt_passwd = NULL;
  protected $txt_email = NULL;
  protected $ind_delete = NULL;
  protected $ind_estado = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_rol($mData = NULL) {
    if ($mData === NULL) { $this->id_rol = NULL; }
    $this->id_rol = StripHtml($mData);
  }

  public function settxt_nombre($mData = NULL) {
    if ($mData === NULL) { $this->txt_nombre = NULL; }
    $this->txt_nombre = StripHtml($mData);
  }

  public function settxt_passwd($mData = NULL) {
    if ($mData === NULL) { $this->txt_passwd = NULL; }
    $this->txt_passwd = StripHtml($mData);
  }

  public function settxt_email($mData = NULL) {
    if ($mData === NULL) { $this->txt_email = NULL; }
    $this->txt_email = StripHtml($mData);
  }

  public function setind_delete($mData = NULL) {
    if ($mData === NULL) { $this->ind_delete = NULL; }
    $this->ind_delete = StripHtml($mData);
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
<?php
/*
 * @file               : Dbcms_roles.db.php
 * @brief              : Clase para la interaccion con la tabla cms_roles
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_roles
 * @brief: Clase para la interaccion con la tabla cms_roles
 */

class Dbcms_roles extends DbDAO {

  public $id = NULL;
  protected $txt_nombre = NULL;
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
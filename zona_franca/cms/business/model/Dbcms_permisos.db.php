<?php
/*
 * @file               : Dbcms_permisos.db.php
 * @brief              : Clase para la interaccion con la tabla cms_permisos
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_permisos
 * @brief: Clase para la interaccion con la tabla cms_permisos
 */

class Dbcms_permisos extends DbDAO {

  public $id = NULL;
  protected $id_modulo = NULL;
  protected $id_rol = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_modulo($mData = NULL) {
    if ($mData === NULL) { $this->id_modulo = NULL; }
    $this->id_modulo = StripHtml($mData);
  }

  public function setid_rol($mData = NULL) {
    if ($mData === NULL) { $this->id_rol = NULL; }
    $this->id_rol = StripHtml($mData);
  }

}
?>
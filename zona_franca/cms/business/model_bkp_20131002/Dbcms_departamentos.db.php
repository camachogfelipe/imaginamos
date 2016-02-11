<?php
/*
 * @file               : Dbcms_departamentos.db.php
 * @brief              : Clase para la interaccion con la tabla cms_departamentos
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-10
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_departamentos
 * @brief: Clase para la interaccion con la tabla cms_departamentos
 */

class Dbcms_departamentos extends DbDAO {

  public $id = NULL;
  protected $txt_nombre = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settxt_nombre($mData = NULL) {
    if ($mData === NULL) { $this->txt_nombre = NULL; }
    $this->txt_nombre = StripHtml($mData);
  }

}
?>
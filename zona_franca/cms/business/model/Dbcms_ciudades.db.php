<?php
/*
 * @file               : Dbcms_ciudades.db.php
 * @brief              : Clase para la interaccion con la tabla cms_ciudades
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-10
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_ciudades
 * @brief: Clase para la interaccion con la tabla cms_ciudades
 */

class Dbcms_ciudades extends DbDAO {

  public $id = NULL;
  protected $id_departamento = NULL;
  protected $txt_nombre = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_departamento($mData = NULL) {
    if ($mData === NULL) { $this->id_departamento = NULL; }
    $this->id_departamento = StripHtml($mData);
  }

  public function settxt_nombre($mData = NULL) {
    if ($mData === NULL) { $this->txt_nombre = NULL; }
    $this->txt_nombre = StripHtml($mData);
  }

}
?>
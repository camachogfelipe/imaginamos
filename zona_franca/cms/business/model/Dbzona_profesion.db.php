<?php
/*
 * @file               : Dbzona_profesion.db.php
 * @brief              : Clase para la interaccion con la tabla zona_profesion
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_profesion
 * @brief: Clase para la interaccion con la tabla zona_profesion
 */

class Dbzona_profesion extends DbDAO {

  public $id = NULL;
  protected $id_area = NULL;
  protected $txt_nombre = NULL;
  protected $ind_estado = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_area($mData = NULL) {
    if ($mData === NULL) { $this->id_area = NULL; }
    $this->id_area = StripHtml($mData);
  }

  public function settxt_nombre($mData = NULL) {
    if ($mData === NULL) { $this->txt_nombre = NULL; }
    $this->txt_nombre = StripHtml($mData);
  }

  public function setind_estado($mData = NULL) {
    if ($mData === NULL) { $this->ind_estado = NULL; }
    $this->ind_estado = StripHtml($mData);
  }

}
?>
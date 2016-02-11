<?php
/*
 * @file               : Dbzona_tipos_trabajos.db.php
 * @brief              : Clase para la interaccion con la tabla zona_tipos_trabajos
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_tipos_trabajos
 * @brief: Clase para la interaccion con la tabla zona_tipos_trabajos
 */

class Dbzona_tipos_trabajos extends DbDAO {

  public $id = NULL;
  protected $txt_nombre = NULL;
  protected $ind_estado = NULL;

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

}
?>
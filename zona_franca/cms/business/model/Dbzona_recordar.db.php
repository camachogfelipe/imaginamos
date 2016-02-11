<?php
/*
 * @file               : Dbzona_recordar.db.php
 * @brief              : Clase para la interaccion con la tabla zona_recordar
 * @version            : 3.3
 * @ultima_modificacion: 2013-09-30
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_recordar
 * @brief: Clase para la interaccion con la tabla zona_recordar
 */

class Dbzona_recordar extends DbDAO {

  public $id = NULL;
  protected $fecha = NULL;
  protected $pass = NULL;
  protected $id_zona_registrados = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setfecha($mData = NULL) {
    if ($mData === NULL) { $this->fecha = NULL; }
    $this->fecha = StripHtml($mData);
  }

  public function setpass($mData = NULL) {
    if ($mData === NULL) { $this->pass = NULL; }
    $this->pass = StripHtml($mData);
  }

  public function setid_zona_registrados($mData = NULL) {
    if ($mData === NULL) { $this->id_zona_registrados = NULL; }
    $this->id_zona_registrados = StripHtml($mData);
  }

}
?>
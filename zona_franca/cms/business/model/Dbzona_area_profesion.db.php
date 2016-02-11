<?php
/*
 * @file               : Dbzona_area_profesion.db.php
 * @brief              : Clase para la interaccion con la tabla zona_area_profesion
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_area_profesion
 * @brief: Clase para la interaccion con la tabla zona_area_profesion
 */

class Dbzona_area_profesion extends DbDAO {

  public $id = NULL;
  protected $id_arealab = NULL;
  protected $id_profesion = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_arealab($mData = NULL) {
    if ($mData === NULL) { $this->id_arealab = NULL; }
    $this->id_arealab = StripHtml($mData);
  }

  public function setid_profesion($mData = NULL) {
    if ($mData === NULL) { $this->id_profesion = NULL; }
    $this->id_profesion = StripHtml($mData);
  }

}
?>
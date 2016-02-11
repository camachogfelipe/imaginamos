<?php
/*
 * @file               : Dbzona_area_laboral.db.php
 * @brief              : Clase para la interaccion con la tabla zona_area_laboral
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-15
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_area_laboral
 * @brief: Clase para la interaccion con la tabla zona_area_laboral
 */

class Dbzona_area_laboral extends DbDAO {

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
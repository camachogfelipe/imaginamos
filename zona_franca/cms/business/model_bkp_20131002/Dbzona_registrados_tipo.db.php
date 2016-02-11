<?php
/*
 * @file               : Dbzona_registrados_tipo.db.php
 * @brief              : Clase para la interaccion con la tabla zona_registrados_tipo
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-09
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_registrados_tipo
 * @brief: Clase para la interaccion con la tabla zona_registrados_tipo
 */

class Dbzona_registrados_tipo extends DbDAO {

  public $id = NULL;
  protected $txt_nombre = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settxt_nombre($mData = NULL) {
    if ($mData === NULL) { $this->txt_nombre = NULL; }
    $this->txt_nombre = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
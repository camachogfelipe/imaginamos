<?php
/*
 * @file               : Dbzona_persona_vistas.db.php
 * @brief              : Clase para la interaccion con la tabla zona_persona_vistas
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_persona_vistas
 * @brief: Clase para la interaccion con la tabla zona_persona_vistas
 */

class Dbzona_persona_vistas extends DbDAO {

  public $id = NULL;
  protected $id_persona = NULL;
  protected $id_empresa = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_persona($mData = NULL) {
    if ($mData === NULL) { $this->id_persona = NULL; }
    $this->id_persona = StripHtml($mData);
  }

  public function setid_empresa($mData = NULL) {
    if ($mData === NULL) { $this->id_empresa = NULL; }
    $this->id_empresa = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
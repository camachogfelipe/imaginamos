<?php
/*
 * @file               : Dbzona_oferta_postulado.db.php
 * @brief              : Clase para la interaccion con la tabla zona_oferta_postulado
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-18
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_oferta_postulado
 * @brief: Clase para la interaccion con la tabla zona_oferta_postulado
 */

class Dbzona_oferta_postulado extends DbDAO {

  public $id = NULL;
  protected $id_oferta = NULL;
  protected $id_persona = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_oferta($mData = NULL) {
    if ($mData === NULL) { $this->id_oferta = NULL; }
    $this->id_oferta = StripHtml($mData);
  }

  public function setid_persona($mData = NULL) {
    if ($mData === NULL) { $this->id_persona = NULL; }
    $this->id_persona = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
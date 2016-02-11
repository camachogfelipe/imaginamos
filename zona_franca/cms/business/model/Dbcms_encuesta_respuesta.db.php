<?php
/*
 * @file               : Dbcms_encuesta_respuesta.db.php
 * @brief              : Clase para la interaccion con la tabla cms_encuesta_respuesta
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_encuesta_respuesta
 * @brief: Clase para la interaccion con la tabla cms_encuesta_respuesta
 */

class Dbcms_encuesta_respuesta extends DbDAO {

  public $id = NULL;
  protected $ind_pregunta = NULL;
  protected $ind_opcion = NULL;
  protected $txt_ip = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setind_pregunta($mData = NULL) {
    if ($mData === NULL) { $this->ind_pregunta = NULL; }
    $this->ind_pregunta = StripHtml($mData);
  }

  public function setind_opcion($mData = NULL) {
    if ($mData === NULL) { $this->ind_opcion = NULL; }
    $this->ind_opcion = StripHtml($mData);
  }

  public function settxt_ip($mData = NULL) {
    if ($mData === NULL) { $this->txt_ip = NULL; }
    $this->txt_ip = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
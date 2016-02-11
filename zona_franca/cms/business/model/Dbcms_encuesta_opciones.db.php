<?php
/*
 * @file               : Dbcms_encuesta_opciones.db.php
 * @brief              : Clase para la interaccion con la tabla cms_encuesta_opciones
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_encuesta_opciones
 * @brief: Clase para la interaccion con la tabla cms_encuesta_opciones
 */

class Dbcms_encuesta_opciones extends DbDAO {

  public $id = NULL;
  protected $id_pregunta = NULL;
  protected $txt_respuesta = NULL;
  protected $ind_estado = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_pregunta($mData = NULL) {
    if ($mData === NULL) { $this->id_pregunta = NULL; }
    $this->id_pregunta = StripHtml($mData);
  }

  public function settxt_respuesta($mData = NULL) {
    if ($mData === NULL) { $this->txt_respuesta = NULL; }
    $this->txt_respuesta = StripHtml($mData);
  }

  public function setind_estado($mData = NULL) {
    if ($mData === NULL) { $this->ind_estado = NULL; }
    $this->ind_estado = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
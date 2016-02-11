<?php
/*
 * @file               : Dbcms_faq_preguntas.db.php
 * @brief              : Clase para la interaccion con la tabla cms_faq_preguntas
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-05
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbcms_faq_preguntas
 * @brief: Clase para la interaccion con la tabla cms_faq_preguntas
 */

class Dbcms_faq_preguntas extends DbDAO {

  public $id = NULL;
  protected $txt_pregunta = NULL;
  protected $ind_estado = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settxt_pregunta($mData = NULL) {
    if ($mData === NULL) { $this->txt_pregunta = NULL; }
    $this->txt_pregunta = StripHtml($mData);
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
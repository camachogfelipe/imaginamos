<?php
/*
 * @file               : Dbpqr_front.db.php
 * @brief              : Clase para la interaccion con la tabla pqr_front
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbpqr_front
 * @brief: Clase para la interaccion con la tabla pqr_front
 */
 
class Dbpqr_front extends DbDAO {

  public $id = NULL;
  protected $texto_principal = NULL;
  protected $titulo = NULL;
  protected $texto_descriptivo = NULL;
  protected $imagen = NULL;
  protected $imagen_solicitud = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settexto_principal($mData = NULL) {
    if ($mData === NULL) { $this->texto_principal = NULL; }
    $this->texto_principal = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto_descriptivo($mData = NULL) {
    if ($mData === NULL) { $this->texto_descriptivo = NULL; }
    $this->texto_descriptivo = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setimagen_solicitud($mData = NULL) {
    if ($mData === NULL) { $this->imagen_solicitud = NULL; }
    $this->imagen_solicitud = StripHtml($mData);
  }

}
?>
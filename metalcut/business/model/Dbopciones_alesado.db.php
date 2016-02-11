<?php
/*
 * @file               : Dbopciones_alesado.db.php
 * @brief              : Clase para la interaccion con la tabla opciones_alesado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbopciones_alesado
 * @brief: Clase para la interaccion con la tabla opciones_alesado
 */
 
class Dbopciones_alesado extends DbDAO {

  protected $idopciones_alesado = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidopciones_alesado($mData = NULL) {
    if ($mData === NULL) { $this->idopciones_alesado = NULL; }
    $this->idopciones_alesado = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
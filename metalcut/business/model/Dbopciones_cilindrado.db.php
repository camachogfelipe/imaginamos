<?php
/*
 * @file               : Dbopciones_cilindrado.db.php
 * @brief              : Clase para la interaccion con la tabla opciones_cilindrado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbopciones_cilindrado
 * @brief: Clase para la interaccion con la tabla opciones_cilindrado
 */
 
class Dbopciones_cilindrado extends DbDAO {

  protected $idopciones_cilindrado = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidopciones_cilindrado($mData = NULL) {
    if ($mData === NULL) { $this->idopciones_cilindrado = NULL; }
    $this->idopciones_cilindrado = StripHtml($mData);
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
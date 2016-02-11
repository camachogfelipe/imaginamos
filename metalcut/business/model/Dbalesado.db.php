<?php
/*
 * @file               : Dbalesado.db.php
 * @brief              : Clase para la interaccion con la tabla alesado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbalesado
 * @brief: Clase para la interaccion con la tabla alesado
 */
 
class Dbalesado extends DbDAO {

  protected $idalesado = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidalesado($mData = NULL) {
    if ($mData === NULL) { $this->idalesado = NULL; }
    $this->idalesado = StripHtml($mData);
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
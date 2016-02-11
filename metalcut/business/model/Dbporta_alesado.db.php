<?php
/*
 * @file               : Dbporta_alesado.db.php
 * @brief              : Clase para la interaccion con la tabla porta_alesado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_alesado
 * @brief: Clase para la interaccion con la tabla porta_alesado
 */
 
class Dbporta_alesado extends DbDAO {

  protected $idporta_alesado = NULL;
  protected $idalesado = NULL;
  protected $ref = NULL;
  protected $diam_ajugero = NULL;
  protected $diam_barra = NULL;
  protected $long_barra = NULL;
  protected $inserto = NULL;
  protected $valor = NULL;

  public function setidporta_alesado($mData = NULL) {
    if ($mData === NULL) { $this->idporta_alesado = NULL; }
    $this->idporta_alesado = StripHtml($mData);
  }

  public function setidalesado($mData = NULL) {
    if ($mData === NULL) { $this->idalesado = NULL; }
    $this->idalesado = StripHtml($mData);
  }

  public function setref($mData = NULL) {
    if ($mData === NULL) { $this->ref = NULL; }
    $this->ref = StripHtml($mData);
  }

  public function setdiam_ajugero($mData = NULL) {
    if ($mData === NULL) { $this->diam_ajugero = NULL; }
    $this->diam_ajugero = StripHtml($mData);
  }

  public function setdiam_barra($mData = NULL) {
    if ($mData === NULL) { $this->diam_barra = NULL; }
    $this->diam_barra = StripHtml($mData);
  }

  public function setlong_barra($mData = NULL) {
    if ($mData === NULL) { $this->long_barra = NULL; }
    $this->long_barra = StripHtml($mData);
  }

  public function setinserto($mData = NULL) {
    if ($mData === NULL) { $this->inserto = NULL; }
    $this->inserto = StripHtml($mData);
  }

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

}
?>
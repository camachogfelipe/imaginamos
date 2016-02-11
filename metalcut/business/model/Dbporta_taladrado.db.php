<?php
/*
 * @file               : Dbporta_taladrado.db.php
 * @brief              : Clase para la interaccion con la tabla porta_taladrado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_taladrado
 * @brief: Clase para la interaccion con la tabla porta_taladrado
 */
 
class Dbporta_taladrado extends DbDAO {

  protected $idporta_taladrado = NULL;
  protected $idtaladrado = NULL;
  protected $ref = NULL;
  protected $diam_corte = NULL;
  protected $long_corte = NULL;
  protected $long_total = NULL;
  protected $diam_espigo = NULL;
  protected $rosca = NULL;
  protected $inserto = NULL;
  protected $cantidad = NULL;

  public function setidporta_taladrado($mData = NULL) {
    if ($mData === NULL) { $this->idporta_taladrado = NULL; }
    $this->idporta_taladrado = StripHtml($mData);
  }

  public function setidtaladrado($mData = NULL) {
    if ($mData === NULL) { $this->idtaladrado = NULL; }
    $this->idtaladrado = StripHtml($mData);
  }

  public function setref($mData = NULL) {
    if ($mData === NULL) { $this->ref = NULL; }
    $this->ref = StripHtml($mData);
  }

  public function setdiam_corte($mData = NULL) {
    if ($mData === NULL) { $this->diam_corte = NULL; }
    $this->diam_corte = StripHtml($mData);
  }

  public function setlong_corte($mData = NULL) {
    if ($mData === NULL) { $this->long_corte = NULL; }
    $this->long_corte = StripHtml($mData);
  }

  public function setlong_total($mData = NULL) {
    if ($mData === NULL) { $this->long_total = NULL; }
    $this->long_total = StripHtml($mData);
  }

  public function setdiam_espigo($mData = NULL) {
    if ($mData === NULL) { $this->diam_espigo = NULL; }
    $this->diam_espigo = StripHtml($mData);
  }

  public function setrosca($mData = NULL) {
    if ($mData === NULL) { $this->rosca = NULL; }
    $this->rosca = StripHtml($mData);
  }

  public function setinserto($mData = NULL) {
    if ($mData === NULL) { $this->inserto = NULL; }
    $this->inserto = StripHtml($mData);
  }

  public function setcantidad($mData = NULL) {
    if ($mData === NULL) { $this->cantidad = NULL; }
    $this->cantidad = StripHtml($mData);
  }

}
?>
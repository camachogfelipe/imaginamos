<?php
/*
 * @file               : Dbporta_escuadrado.db.php
 * @brief              : Clase para la interaccion con la tabla porta_escuadrado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_escuadrado
 * @brief: Clase para la interaccion con la tabla porta_escuadrado
 */
 
class Dbporta_escuadrado extends DbDAO {

  protected $idporta_escuadrado = NULL;
  protected $idescuadrado = NULL;
  protected $ref = NULL;
  protected $diam_corte = NULL;
  protected $diam_espigo = NULL;
  protected $long_total = NULL;
  protected $n_insertos = NULL;
  protected $angulo_ataque = NULL;
  protected $inserto = NULL;
  protected $valor = NULL;

  public function setidporta_escuadrado($mData = NULL) {
    if ($mData === NULL) { $this->idporta_escuadrado = NULL; }
    $this->idporta_escuadrado = StripHtml($mData);
  }

  public function setidescuadrado($mData = NULL) {
    if ($mData === NULL) { $this->idescuadrado = NULL; }
    $this->idescuadrado = StripHtml($mData);
  }

  public function setref($mData = NULL) {
    if ($mData === NULL) { $this->ref = NULL; }
    $this->ref = StripHtml($mData);
  }

  public function setdiam_corte($mData = NULL) {
    if ($mData === NULL) { $this->diam_corte = NULL; }
    $this->diam_corte = StripHtml($mData);
  }

  public function setdiam_espigo($mData = NULL) {
    if ($mData === NULL) { $this->diam_espigo = NULL; }
    $this->diam_espigo = StripHtml($mData);
  }

  public function setlong_total($mData = NULL) {
    if ($mData === NULL) { $this->long_total = NULL; }
    $this->long_total = StripHtml($mData);
  }

  public function setn_insertos($mData = NULL) {
    if ($mData === NULL) { $this->n_insertos = NULL; }
    $this->n_insertos = StripHtml($mData);
  }

  public function setangulo_ataque($mData = NULL) {
    if ($mData === NULL) { $this->angulo_ataque = NULL; }
    $this->angulo_ataque = StripHtml($mData);
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
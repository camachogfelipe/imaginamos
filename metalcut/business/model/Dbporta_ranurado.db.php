<?php
/*
 * @file               : Dbporta_ranurado.db.php
 * @brief              : Clase para la interaccion con la tabla porta_ranurado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_ranurado
 * @brief: Clase para la interaccion con la tabla porta_ranurado
 */
 
class Dbporta_ranurado extends DbDAO {

  protected $idporta_ranurado = NULL;
  protected $idranurado = NULL;
  protected $ref = NULL;
  protected $diam_corte = NULL;
  protected $diam_espigo = NULL;
  protected $long_total = NULL;
  protected $n_insertos = NULL;
  protected $inserto = NULL;
  protected $cantidad = NULL;

  public function setidporta_ranurado($mData = NULL) {
    if ($mData === NULL) { $this->idporta_ranurado = NULL; }
    $this->idporta_ranurado = StripHtml($mData);
  }

  public function setidranurado($mData = NULL) {
    if ($mData === NULL) { $this->idranurado = NULL; }
    $this->idranurado = StripHtml($mData);
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
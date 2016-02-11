<?php
/*
 * @file               : Dbporta_copiado.db.php
 * @brief              : Clase para la interaccion con la tabla porta_copiado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_copiado
 * @brief: Clase para la interaccion con la tabla porta_copiado
 */
 
class Dbporta_copiado extends DbDAO {

  protected $idporta_copiado = NULL;
  protected $idcopiado = NULL;
  protected $ref = NULL;
  protected $diam_corte = NULL;
  protected $diam_espigo = NULL;
  protected $long_total = NULL;
  protected $n_insertos = NULL;
  protected $inserto = NULL;
  protected $valor = NULL;

  public function setidporta_copiado($mData = NULL) {
    if ($mData === NULL) { $this->idporta_copiado = NULL; }
    $this->idporta_copiado = StripHtml($mData);
  }

  public function setidcopiado($mData = NULL) {
    if ($mData === NULL) { $this->idcopiado = NULL; }
    $this->idcopiado = StripHtml($mData);
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

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

}
?>
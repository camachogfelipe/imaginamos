<?php
/*
 * @file               : Dbporta_roscado_ext.db.php
 * @brief              : Clase para la interaccion con la tabla porta_roscado_ext
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_roscado_ext
 * @brief: Clase para la interaccion con la tabla porta_roscado_ext
 */
 
class Dbporta_roscado_ext extends DbDAO {

  protected $idporta_roscado_ext = NULL;
  protected $idroscado = NULL;
  protected $ref = NULL;
  protected $diam_ajugero = NULL;
  protected $diam_barra = NULL;
  protected $long_barra = NULL;
  protected $inserto = NULL;
  protected $valor = NULL;

  public function setidporta_roscado_ext($mData = NULL) {
    if ($mData === NULL) { $this->idporta_roscado_ext = NULL; }
    $this->idporta_roscado_ext = StripHtml($mData);
  }

  public function setidroscado($mData = NULL) {
    if ($mData === NULL) { $this->idroscado = NULL; }
    $this->idroscado = StripHtml($mData);
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
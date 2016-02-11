<?php
/*
 * @file               : Dbporta_cuerpo.db.php
 * @brief              : Clase para la interaccion con la tabla porta_cuerpo
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_cuerpo
 * @brief: Clase para la interaccion con la tabla porta_cuerpo
 */
 
class Dbporta_cuerpo extends DbDAO {

  protected $idporta_cuerpo = NULL;
  protected $ref = NULL;
  protected $idportaherramienta = NULL;
  protected $valor_col = NULL;
  protected $orientacion = NULL;
  protected $cantidad = NULL;
  protected $valor = NULL;

  public function setidporta_cuerpo($mData = NULL) {
    if ($mData === NULL) { $this->idporta_cuerpo = NULL; }
    $this->idporta_cuerpo = StripHtml($mData);
  }

  public function setref($mData = NULL) {
    if ($mData === NULL) { $this->ref = NULL; }
    $this->ref = StripHtml($mData);
  }

  public function setidportaherramienta($mData = NULL) {
    if ($mData === NULL) { $this->idportaherramienta = NULL; }
    $this->idportaherramienta = StripHtml($mData);
  }

  public function setvalor_col($mData = NULL) {
    if ($mData === NULL) { $this->valor_col = NULL; }
    $this->valor_col = StripHtml($mData);
  }

  public function setorientacion($mData = NULL) {
    if ($mData === NULL) { $this->orientacion = NULL; }
    $this->orientacion = StripHtml($mData);
  }

  public function setcantidad($mData = NULL) {
    if ($mData === NULL) { $this->cantidad = NULL; }
    $this->cantidad = StripHtml($mData);
  }

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

}
?>
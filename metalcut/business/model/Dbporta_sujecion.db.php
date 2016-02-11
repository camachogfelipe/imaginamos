<?php
/*
 * @file               : Dbporta_sujecion.db.php
 * @brief              : Clase para la interaccion con la tabla porta_sujecion
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_sujecion
 * @brief: Clase para la interaccion con la tabla porta_sujecion
 */
 
class Dbporta_sujecion extends DbDAO {

  protected $idporta_sujecion = NULL;
  protected $idproductos_sujecion = NULL;
  protected $ref = NULL;
  protected $rango_sujecion = NULL;
  protected $valor = NULL;

  public function setidporta_sujecion($mData = NULL) {
    if ($mData === NULL) { $this->idporta_sujecion = NULL; }
    $this->idporta_sujecion = StripHtml($mData);
  }

  public function setidproductos_sujecion($mData = NULL) {
    if ($mData === NULL) { $this->idproductos_sujecion = NULL; }
    $this->idproductos_sujecion = StripHtml($mData);
  }

  public function setref($mData = NULL) {
    if ($mData === NULL) { $this->ref = NULL; }
    $this->ref = StripHtml($mData);
  }

  public function setrango_sujecion($mData = NULL) {
    if ($mData === NULL) { $this->rango_sujecion = NULL; }
    $this->rango_sujecion = StripHtml($mData);
  }

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

}
?>
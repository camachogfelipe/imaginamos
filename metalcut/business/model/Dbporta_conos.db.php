<?php
/*
 * @file               : Dbporta_conos.db.php
 * @brief              : Clase para la interaccion con la tabla porta_conos
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_conos
 * @brief: Clase para la interaccion con la tabla porta_conos
 */
 
class Dbporta_conos extends DbDAO {

  protected $idporta_conos = NULL;
  protected $idproductos_conos = NULL;
  protected $ref = NULL;
  protected $longitud = NULL;
  protected $diametro = NULL;
  protected $tipo_boquilla = NULL;
  protected $valor = NULL;

  public function setidporta_conos($mData = NULL) {
    if ($mData === NULL) { $this->idporta_conos = NULL; }
    $this->idporta_conos = StripHtml($mData);
  }

  public function setidproductos_conos($mData = NULL) {
    if ($mData === NULL) { $this->idproductos_conos = NULL; }
    $this->idproductos_conos = StripHtml($mData);
  }

  public function setref($mData = NULL) {
    if ($mData === NULL) { $this->ref = NULL; }
    $this->ref = StripHtml($mData);
  }

  public function setlongitud($mData = NULL) {
    if ($mData === NULL) { $this->longitud = NULL; }
    $this->longitud = StripHtml($mData);
  }

  public function setdiametro($mData = NULL) {
    if ($mData === NULL) { $this->diametro = NULL; }
    $this->diametro = StripHtml($mData);
  }

  public function settipo_boquilla($mData = NULL) {
    if ($mData === NULL) { $this->tipo_boquilla = NULL; }
    $this->tipo_boquilla = StripHtml($mData);
  }

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

}
?>
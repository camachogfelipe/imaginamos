<?php
/*
 * @file               : Dbporta_accesorio.db.php
 * @brief              : Clase para la interaccion con la tabla porta_accesorio
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_accesorio
 * @brief: Clase para la interaccion con la tabla porta_accesorio
 */
 
class Dbporta_accesorio extends DbDAO {

  protected $idporta_accesorio = NULL;
  protected $idaccesorio = NULL;
  protected $ref = NULL;
  protected $longitud = NULL;
  protected $diametro = NULL;
  protected $tipo_boquilla = NULL;
  protected $valor = NULL;

  public function setidporta_accesorio($mData = NULL) {
    if ($mData === NULL) { $this->idporta_accesorio = NULL; }
    $this->idporta_accesorio = StripHtml($mData);
  }

  public function setidaccesorio($mData = NULL) {
    if ($mData === NULL) { $this->idaccesorio = NULL; }
    $this->idaccesorio = StripHtml($mData);
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
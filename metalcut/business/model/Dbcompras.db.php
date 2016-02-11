<?php
/*
 * @file               : Dbcompras.db.php
 * @brief              : Clase para la interaccion con la tabla compras
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-09
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcompras
 * @brief: Clase para la interaccion con la tabla compras
 */
 
class Dbcompras extends DbDAO {

  protected $idcompras = NULL;
  protected $idprod = NULL;
  protected $cant = NULL;
  protected $ori = NULL;
  protected $det = NULL;
  protected $tabla = NULL;
  protected $valor = NULL;
  protected $user_id = NULL;
  protected $estado = NULL;
  protected $fecha = NULL;

  public function setidcompras($mData = NULL) {
    if ($mData === NULL) { $this->idcompras = NULL; }
    $this->idcompras = StripHtml($mData);
  }

  public function setidprod($mData = NULL) {
    if ($mData === NULL) { $this->idprod = NULL; }
    $this->idprod = StripHtml($mData);
  }

  public function setcant($mData = NULL) {
    if ($mData === NULL) { $this->cant = NULL; }
    $this->cant = StripHtml($mData);
  }

  public function setori($mData = NULL) {
    if ($mData === NULL) { $this->ori = NULL; }
    $this->ori = StripHtml($mData);
  }

  public function setdet($mData = NULL) {
    if ($mData === NULL) { $this->det = NULL; }
    $this->det = StripHtml($mData);
  }

  public function settabla($mData = NULL) {
    if ($mData === NULL) { $this->tabla = NULL; }
    $this->tabla = StripHtml($mData);
  }

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

  public function setuser_id($mData = NULL) {
    if ($mData === NULL) { $this->user_id = NULL; }
    $this->user_id = StripHtml($mData);
  }

  public function setestado($mData = NULL) {
    if ($mData === NULL) { $this->estado = NULL; }
    $this->estado = StripHtml($mData);
  }

  public function setfecha($mData = NULL) {
    if ($mData === NULL) { $this->fecha = NULL; }
    $this->fecha = StripHtml($mData);
  }

}
?>
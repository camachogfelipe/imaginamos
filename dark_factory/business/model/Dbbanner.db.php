<?php
/*
 * @file               : Dbbanner.db.php
 * @brief              : Clase para la interaccion con la tabla banner
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbbanner
 * @brief: Clase para la interaccion con la tabla banner
 */
 
class Dbbanner extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $fecha = NULL;
  protected $pais = NULL;
  protected $edad = NULL;
  protected $texto = NULL;
  protected $link = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setfecha($mData = NULL) {
    if ($mData === NULL) { $this->fecha = NULL; }
    $this->fecha = StripHtml($mData);
  }

  public function setpais($mData = NULL) {
    if ($mData === NULL) { $this->pais = NULL; }
    $this->pais = StripHtml($mData);
  }

  public function setedad($mData = NULL) {
    if ($mData === NULL) { $this->edad = NULL; }
    $this->edad = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

}
?>
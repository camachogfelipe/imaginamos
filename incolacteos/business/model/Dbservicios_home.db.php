<?php
/*
 * @file               : Dbservicios_home.db.php
 * @brief              : Clase para la interaccion con la tabla servicios_home
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbservicios_home
 * @brief: Clase para la interaccion con la tabla servicios_home
 */
 
class Dbservicios_home extends DbDAO {

  public $id = NULL;
  protected $texto = NULL;
  protected $titulo1 = NULL;
  protected $titulo2 = NULL;
  protected $titulo3 = NULL;
  protected $titulo4 = NULL;
  protected $link1 = NULL;
  protected $link2 = NULL;
  protected $link3 = NULL;
  protected $link4 = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function settitulo1($mData = NULL) {
    if ($mData === NULL) { $this->titulo1 = NULL; }
    $this->titulo1 = StripHtml($mData);
  }

  public function settitulo2($mData = NULL) {
    if ($mData === NULL) { $this->titulo2 = NULL; }
    $this->titulo2 = StripHtml($mData);
  }

  public function settitulo3($mData = NULL) {
    if ($mData === NULL) { $this->titulo3 = NULL; }
    $this->titulo3 = StripHtml($mData);
  }

  public function settitulo4($mData = NULL) {
    if ($mData === NULL) { $this->titulo4 = NULL; }
    $this->titulo4 = StripHtml($mData);
  }

  public function setlink1($mData = NULL) {
    if ($mData === NULL) { $this->link1 = NULL; }
    $this->link1 = StripHtml($mData);
  }

  public function setlink2($mData = NULL) {
    if ($mData === NULL) { $this->link2 = NULL; }
    $this->link2 = StripHtml($mData);
  }

  public function setlink3($mData = NULL) {
    if ($mData === NULL) { $this->link3 = NULL; }
    $this->link3 = StripHtml($mData);
  }

  public function setlink4($mData = NULL) {
    if ($mData === NULL) { $this->link4 = NULL; }
    $this->link4 = StripHtml($mData);
  }

}
?>
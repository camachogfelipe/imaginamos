<?php
/*
 * @file               : Dbbanner.db.php
 * @brief              : Clase para la interaccion con la tabla banner
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbanner
 * @brief: Clase para la interaccion con la tabla banner
 */
 
class Dbbanner extends DbDAO {

  public $id = NULL;
  protected $titulo1 = NULL;
  protected $titulo2 = NULL;
  protected $titulo3 = NULL;
  protected $link = NULL;
  protected $img_fondo = NULL;
  protected $img_transparente = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
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

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

  public function setimg_fondo($mData = NULL) {
    if ($mData === NULL) { $this->img_fondo = NULL; }
    $this->img_fondo = StripHtml($mData);
  }

  public function setimg_transparente($mData = NULL) {
    if ($mData === NULL) { $this->img_transparente = NULL; }
    $this->img_transparente = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbnosotros.db.php
 * @brief              : Clase para la interaccion con la tabla nosotros
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbnosotros
 * @brief: Clase para la interaccion con la tabla nosotros
 */
 
class Dbnosotros extends DbDAO {

  public $id = NULL;
  protected $titulo1 = NULL;
  protected $titulo2 = NULL;
  protected $img1 = NULL;
  protected $img2 = NULL;
  protected $img3 = NULL;
  protected $texto = NULL;
  protected $texto2 = NULL;

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

  public function setimg1($mData = NULL) {
    if ($mData === NULL) { $this->img1 = NULL; }
    $this->img1 = StripHtml($mData);
  }

  public function setimg2($mData = NULL) {
    if ($mData === NULL) { $this->img2 = NULL; }
    $this->img2 = StripHtml($mData);
  }

  public function setimg3($mData = NULL) {
    if ($mData === NULL) { $this->img3 = NULL; }
    $this->img3 = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function settexto2($mData = NULL) {
    if ($mData === NULL) { $this->texto2 = NULL; }
    $this->texto2 = StripHtml($mData);
  }

}
?>
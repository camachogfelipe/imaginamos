<?php
/*
 * @file               : Dbour_blog.db.php
 * @brief              : Clase para la interaccion con la tabla our_blog
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbour_blog
 * @brief: Clase para la interaccion con la tabla our_blog
 */
 
class Dbour_blog extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $fecha = NULL;
  protected $imagen = NULL;
  protected $autor = NULL;
  protected $link = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setfecha($mData = NULL) {
    if ($mData === NULL) { $this->fecha = NULL; }
    $this->fecha = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setautor($mData = NULL) {
    if ($mData === NULL) { $this->autor = NULL; }
    $this->autor = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbdestacados_home.db.php
 * @brief              : Clase para la interaccion con la tabla destacados_home
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbdestacados_home
 * @brief: Clase para la interaccion con la tabla destacados_home
 */
 
class Dbdestacados_home extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $subtitulo = NULL;
  protected $img = NULL;
  protected $link = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setsubtitulo($mData = NULL) {
    if ($mData === NULL) { $this->subtitulo = NULL; }
    $this->subtitulo = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

}
?>
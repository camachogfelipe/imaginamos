<?php
/*
 * @file               : Dbbienvenidos.db.php
 * @brief              : Clase para la interaccion con la tabla bienvenidos
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbienvenidos
 * @brief: Clase para la interaccion con la tabla bienvenidos
 */
 
class Dbbienvenidos extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $subtitulo = NULL;
  protected $texto = NULL;
  protected $globo = NULL;
  protected $img = NULL;

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

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setglobo($mData = NULL) {
    if ($mData === NULL) { $this->globo = NULL; }
    $this->globo = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

}
?>
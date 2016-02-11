<?php
/*
 * @file               : Dbtrailers.db.php
 * @brief              : Clase para la interaccion con la tabla trailers
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbtrailers
 * @brief: Clase para la interaccion con la tabla trailers
 */
 
class Dbtrailers extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $genero = NULL;
  protected $imagen = NULL;
  protected $release_year = NULL;
  protected $director = NULL;
  protected $producer = NULL;
  protected $url = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setgenero($mData = NULL) {
    if ($mData === NULL) { $this->genero = NULL; }
    $this->genero = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setrelease_year($mData = NULL) {
    if ($mData === NULL) { $this->release_year = NULL; }
    $this->release_year = StripHtml($mData);
  }

  public function setdirector($mData = NULL) {
    if ($mData === NULL) { $this->director = NULL; }
    $this->director = StripHtml($mData);
  }

  public function setproducer($mData = NULL) {
    if ($mData === NULL) { $this->producer = NULL; }
    $this->producer = StripHtml($mData);
  }

  public function seturl($mData = NULL) {
    if ($mData === NULL) { $this->url = NULL; }
    $this->url = StripHtml($mData);
  }

}
?>
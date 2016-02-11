<?php
/*
 * @file               : Dbbanner.db.php
 * @brief              : Clase para la interaccion con la tabla banner
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbanner
 * @brief: Clase para la interaccion con la tabla banner
 */
 
class Dbbanner extends DbDAO {

  protected $idbanner = NULL;
  protected $titulo = NULL;
  protected $subtitulo1 = NULL;
  protected $subtitulo2 = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidbanner($mData = NULL) {
    if ($mData === NULL) { $this->idbanner = NULL; }
    $this->idbanner = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setsubtitulo1($mData = NULL) {
    if ($mData === NULL) { $this->subtitulo1 = NULL; }
    $this->subtitulo1 = StripHtml($mData);
  }

  public function setsubtitulo2($mData = NULL) {
    if ($mData === NULL) { $this->subtitulo2 = NULL; }
    $this->subtitulo2 = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbbanner_sirius.db.php
 * @brief              : Clase para la interaccion con la tabla banner_sirius
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbanner_sirius
 * @brief: Clase para la interaccion con la tabla banner_sirius
 */
 
class Dbbanner_sirius extends DbDAO {

  protected $idbanner_sirius = NULL;
  protected $titulo = NULL;
  protected $subtitulo = NULL;
  protected $imagen = NULL;

  public function setidbanner_sirius($mData = NULL) {
    if ($mData === NULL) { $this->idbanner_sirius = NULL; }
    $this->idbanner_sirius = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setsubtitulo($mData = NULL) {
    if ($mData === NULL) { $this->subtitulo = NULL; }
    $this->subtitulo = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
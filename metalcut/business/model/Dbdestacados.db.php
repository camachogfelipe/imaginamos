<?php
/*
 * @file               : Dbdestacados.db.php
 * @brief              : Clase para la interaccion con la tabla destacados
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbdestacados
 * @brief: Clase para la interaccion con la tabla destacados
 */
 
class Dbdestacados extends DbDAO {

  protected $iddestacados = NULL;
  protected $imagen = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $link = NULL;

  public function setiddestacados($mData = NULL) {
    if ($mData === NULL) { $this->iddestacados = NULL; }
    $this->iddestacados = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
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
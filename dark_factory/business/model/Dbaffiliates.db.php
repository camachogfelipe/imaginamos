<?php
/*
 * @file               : Dbaffiliates.db.php
 * @brief              : Clase para la interaccion con la tabla affiliates
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbaffiliates
 * @brief: Clase para la interaccion con la tabla affiliates
 */
 
class Dbaffiliates extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $imagen = NULL;
  protected $link = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

}
?>
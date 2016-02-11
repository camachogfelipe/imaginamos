<?php
/*
 * @file               : Dbhome.db.php
 * @brief              : Clase para la interaccion con la tabla home
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbhome
 * @brief: Clase para la interaccion con la tabla home
 */
 
class Dbhome extends DbDAO {

  public $id = NULL;
  protected $texto_mensaje = NULL;
  protected $link = NULL;
  protected $imagen_video = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settexto_mensaje($mData = NULL) {
    if ($mData === NULL) { $this->texto_mensaje = NULL; }
    $this->texto_mensaje = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

  public function setimagen_video($mData = NULL) {
    if ($mData === NULL) { $this->imagen_video = NULL; }
    $this->imagen_video = StripHtml($mData);
  }

}
?>
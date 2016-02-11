<?php
/*
 * @file               : Dbeventos.db.php
 * @brief              : Clase para la interaccion con la tabla eventos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbeventos
 * @brief: Clase para la interaccion con la tabla eventos
 */
 
class Dbeventos extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $fecha = NULL;
  protected $descripcion = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setfecha($mData = NULL) {
    if ($mData === NULL) { $this->fecha = NULL; }
    $this->fecha = StripHtml($mData);
  }

  public function setdescripcion($mData = NULL) {
    if ($mData === NULL) { $this->descripcion = NULL; }
    $this->descripcion = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbintimindad_noticias.db.php
 * @brief              : Clase para la interaccion con la tabla intimindad_noticias
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbintimindad_noticias
 * @brief: Clase para la interaccion con la tabla intimindad_noticias
 */
 
class Dbintimindad_noticias extends DbDAO {

  public $id = NULL;
  protected $id_intimidad = NULL;
  protected $titulo = NULL;
  protected $descripcion = NULL;
  protected $img = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_intimidad($mData = NULL) {
    if ($mData === NULL) { $this->id_intimidad = NULL; }
    $this->id_intimidad = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setdescripcion($mData = NULL) {
    if ($mData === NULL) { $this->descripcion = NULL; }
    $this->descripcion = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

}
?>
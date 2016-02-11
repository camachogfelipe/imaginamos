<?php
/*
 * @file               : Dbnoticias.db.php
 * @brief              : Clase para la interaccion con la tabla noticias
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbnoticias
 * @brief: Clase para la interaccion con la tabla noticias
 */
 
class Dbnoticias extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $img = NULL;
  protected $fecha = NULL;
  protected $posicion = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function setfecha($mData = NULL) {
    if ($mData === NULL) { $this->fecha = NULL; }
    $this->fecha = StripHtml($mData);
  }

  public function setposicion($mData = NULL) {
    if ($mData === NULL) { $this->posicion = NULL; }
    $this->posicion = StripHtml($mData);
  }

}
?>
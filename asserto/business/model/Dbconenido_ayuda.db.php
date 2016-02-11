<?php
/*
 * @file               : Dbconenido_ayuda.db.php
 * @brief              : Clase para la interaccion con la tabla conenido_ayuda
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbconenido_ayuda
 * @brief: Clase para la interaccion con la tabla conenido_ayuda
 */
 
class Dbconenido_ayuda extends DbDAO {

  protected $idayuda = NULL;
  protected $idseccion = NULL;
  protected $texto1 = NULL;
  protected $texto2 = NULL;
  protected $link = NULL;
  protected $imagen = NULL;
  protected $fecha_creacion = NULL;
  protected $fecha_modificacion = NULL;

  public function setidayuda($mData = NULL) {
    if ($mData === NULL) { $this->idayuda = NULL; }
    $this->idayuda = StripHtml($mData);
  }

  public function setidseccion($mData = NULL) {
    if ($mData === NULL) { $this->idseccion = NULL; }
    $this->idseccion = StripHtml($mData);
  }

  public function settexto1($mData = NULL) {
    if ($mData === NULL) { $this->texto1 = NULL; }
    $this->texto1 = StripHtml($mData);
  }

  public function settexto2($mData = NULL) {
    if ($mData === NULL) { $this->texto2 = NULL; }
    $this->texto2 = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setfecha_creacion($mData = NULL) {
    if ($mData === NULL) { $this->fecha_creacion = NULL; }
    $this->fecha_creacion = StripHtml($mData);
  }

  public function setfecha_modificacion($mData = NULL) {
    if ($mData === NULL) { $this->fecha_modificacion = NULL; }
    $this->fecha_modificacion = StripHtml($mData);
  }

}
?>
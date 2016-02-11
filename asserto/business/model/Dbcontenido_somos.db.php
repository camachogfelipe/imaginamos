<?php
/*
 * @file               : Dbcontenido_somos.db.php
 * @brief              : Clase para la interaccion con la tabla contenido_somos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcontenido_somos
 * @brief: Clase para la interaccion con la tabla contenido_somos
 */
 
class Dbcontenido_somos extends DbDAO {

  protected $idcontenido = NULL;
  protected $idseccion = NULL;
  protected $texto1 = NULL;
  protected $texto2 = NULL;
  protected $imagen = NULL;
  protected $fecha_creacion = NULL;
  protected $fecha_modificacion = NULL;

  public function setidcontenido($mData = NULL) {
    if ($mData === NULL) { $this->idcontenido = NULL; }
    $this->idcontenido = StripHtml($mData);
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
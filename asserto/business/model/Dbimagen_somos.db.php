<?php
/*
 * @file               : Dbimagen_somos.db.php
 * @brief              : Clase para la interaccion con la tabla imagen_somos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimagen_somos
 * @brief: Clase para la interaccion con la tabla imagen_somos
 */
 
class Dbimagen_somos extends DbDAO {

  protected $idimagen = NULL;
  protected $imagen = NULL;
  protected $fecha_creacion = NULL;
  protected $fecha_modificacion = NULL;

  public function setidimagen($mData = NULL) {
    if ($mData === NULL) { $this->idimagen = NULL; }
    $this->idimagen = StripHtml($mData);
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
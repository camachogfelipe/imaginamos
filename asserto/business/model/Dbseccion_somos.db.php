<?php
/*
 * @file               : Dbseccion_somos.db.php
 * @brief              : Clase para la interaccion con la tabla seccion_somos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbseccion_somos
 * @brief: Clase para la interaccion con la tabla seccion_somos
 */
 
class Dbseccion_somos extends DbDAO {

  protected $idseccion = NULL;
  protected $nombre = NULL;
  protected $fecha_creacion = NULL;
  protected $fecha_modificacion = NULL;

  public function setidseccion($mData = NULL) {
    if ($mData === NULL) { $this->idseccion = NULL; }
    $this->idseccion = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
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
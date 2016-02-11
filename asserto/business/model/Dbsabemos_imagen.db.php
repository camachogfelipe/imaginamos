<?php
/*
 * @file               : Dbsabemos_imagen.db.php
 * @brief              : Clase para la interaccion con la tabla sabemos_imagen
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbsabemos_imagen
 * @brief: Clase para la interaccion con la tabla sabemos_imagen
 */
 
class Dbsabemos_imagen extends DbDAO {

  protected $idsabemos = NULL;
  protected $imagen = NULL;
  protected $fecha_creacion = NULL;
  protected $fecha_modificacion = NULL;

  public function setidsabemos($mData = NULL) {
    if ($mData === NULL) { $this->idsabemos = NULL; }
    $this->idsabemos = StripHtml($mData);
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
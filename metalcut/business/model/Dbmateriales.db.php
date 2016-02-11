<?php
/*
 * @file               : Dbmateriales.db.php
 * @brief              : Clase para la interaccion con la tabla materiales
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbmateriales
 * @brief: Clase para la interaccion con la tabla materiales
 */
 
class Dbmateriales extends DbDAO {

  protected $idmateriales = NULL;
  protected $color = NULL;
  protected $descripcion = NULL;
  protected $imagen = NULL;

  public function setidmateriales($mData = NULL) {
    if ($mData === NULL) { $this->idmateriales = NULL; }
    $this->idmateriales = StripHtml($mData);
  }

  public function setcolor($mData = NULL) {
    if ($mData === NULL) { $this->color = NULL; }
    $this->color = StripHtml($mData);
  }

  public function setdescripcion($mData = NULL) {
    if ($mData === NULL) { $this->descripcion = NULL; }
    $this->descripcion = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
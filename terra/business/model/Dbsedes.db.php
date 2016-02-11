<?php
/*
 * @file               : Dbsedes.db.php
 * @brief              : Clase para la interaccion con la tabla sedes
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbsedes
 * @brief: Clase para la interaccion con la tabla sedes
 */
 
class Dbsedes extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $direccion = NULL;
  protected $correo = NULL;
  protected $servicios = NULL;
  protected $mapa = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setdireccion($mData = NULL) {
    if ($mData === NULL) { $this->direccion = NULL; }
    $this->direccion = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

  public function setservicios($mData = NULL) {
    if ($mData === NULL) { $this->servicios = NULL; }
    $this->servicios = StripHtml($mData);
  }

  public function setmapa($mData = NULL) {
    if ($mData === NULL) { $this->mapa = NULL; }
    $this->mapa = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbservicios_imagenes.db.php
 * @brief              : Clase para la interaccion con la tabla servicios_imagenes
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbservicios_imagenes
 * @brief: Clase para la interaccion con la tabla servicios_imagenes
 */
 
class Dbservicios_imagenes extends DbDAO {

  public $id = NULL;
  protected $id_servicios = NULL;
  protected $img = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_servicios($mData = NULL) {
    if ($mData === NULL) { $this->id_servicios = NULL; }
    $this->id_servicios = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbaseguradoras.db.php
 * @brief              : Clase para la interaccion con la tabla aseguradoras
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbaseguradoras
 * @brief: Clase para la interaccion con la tabla aseguradoras
 */
 
class Dbaseguradoras extends DbDAO {

  public $id = NULL;
  protected $servicios_id = NULL;
  protected $titulo = NULL;
  protected $imagen = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setservicios_id($mData = NULL) {
    if ($mData === NULL) { $this->servicios_id = NULL; }
    $this->servicios_id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
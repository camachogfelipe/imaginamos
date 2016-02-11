<?php
/*
 * @file               : Dbcontacto.db.php
 * @brief              : Clase para la interaccion con la tabla contacto
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcontacto
 * @brief: Clase para la interaccion con la tabla contacto
 */
 
class Dbcontacto extends DbDAO {

  protected $idcontacto = NULL;
  protected $ciudad = NULL;
  protected $direccion1 = NULL;
  protected $direccion2 = NULL;
  protected $telefonos = NULL;
  protected $fax = NULL;
  protected $correos = NULL;
  protected $imagen = NULL;

  public function setidcontacto($mData = NULL) {
    if ($mData === NULL) { $this->idcontacto = NULL; }
    $this->idcontacto = StripHtml($mData);
  }

  public function setciudad($mData = NULL) {
    if ($mData === NULL) { $this->ciudad = NULL; }
    $this->ciudad = StripHtml($mData);
  }

  public function setdireccion1($mData = NULL) {
    if ($mData === NULL) { $this->direccion1 = NULL; }
    $this->direccion1 = StripHtml($mData);
  }

  public function setdireccion2($mData = NULL) {
    if ($mData === NULL) { $this->direccion2 = NULL; }
    $this->direccion2 = StripHtml($mData);
  }

  public function settelefonos($mData = NULL) {
    if ($mData === NULL) { $this->telefonos = NULL; }
    $this->telefonos = StripHtml($mData);
  }

  public function setfax($mData = NULL) {
    if ($mData === NULL) { $this->fax = NULL; }
    $this->fax = StripHtml($mData);
  }

  public function setcorreos($mData = NULL) {
    if ($mData === NULL) { $this->correos = NULL; }
    $this->correos = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
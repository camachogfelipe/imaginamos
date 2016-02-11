<?php
/*
 * @file               : Dbdatos_contacto.db.php
 * @brief              : Clase para la interaccion con la tabla datos_contacto
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbdatos_contacto
 * @brief: Clase para la interaccion con la tabla datos_contacto
 */
 
class Dbdatos_contacto extends DbDAO {

  protected $iddatos_contacto = NULL;
  protected $direccion = NULL;
  protected $ciudad = NULL;
  protected $telefono = NULL;
  protected $correo = NULL;
  protected $fecha_creacion = NULL;
  protected $fecha_modificacion = NULL;

  public function setiddatos_contacto($mData = NULL) {
    if ($mData === NULL) { $this->iddatos_contacto = NULL; }
    $this->iddatos_contacto = StripHtml($mData);
  }

  public function setdireccion($mData = NULL) {
    if ($mData === NULL) { $this->direccion = NULL; }
    $this->direccion = StripHtml($mData);
  }

  public function setciudad($mData = NULL) {
    if ($mData === NULL) { $this->ciudad = NULL; }
    $this->ciudad = StripHtml($mData);
  }

  public function settelefono($mData = NULL) {
    if ($mData === NULL) { $this->telefono = NULL; }
    $this->telefono = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
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
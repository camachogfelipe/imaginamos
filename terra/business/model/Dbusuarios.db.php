<?php
/*
 * @file               : Dbusuarios.db.php
 * @brief              : Clase para la interaccion con la tabla usuarios
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbusuarios
 * @brief: Clase para la interaccion con la tabla usuarios
 */
 
class Dbusuarios extends DbDAO {

  public $id = NULL;
  protected $nombres = NULL;
  protected $empresa = NULL;
  protected $correo = NULL;
  protected $contrasena = NULL;
  protected $telefono = NULL;
  protected $mensaje = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombres($mData = NULL) {
    if ($mData === NULL) { $this->nombres = NULL; }
    $this->nombres = StripHtml($mData);
  }

  public function setempresa($mData = NULL) {
    if ($mData === NULL) { $this->empresa = NULL; }
    $this->empresa = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

  public function setcontrasena($mData = NULL) {
    if ($mData === NULL) { $this->contrasena = NULL; }
    $this->contrasena = StripHtml($mData);
  }

  public function settelefono($mData = NULL) {
    if ($mData === NULL) { $this->telefono = NULL; }
    $this->telefono = StripHtml($mData);
  }

  public function setmensaje($mData = NULL) {
    if ($mData === NULL) { $this->mensaje = NULL; }
    $this->mensaje = StripHtml($mData);
  }

}
?>
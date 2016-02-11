<?php
/*
 * @file               : Dbconsultas.db.php
 * @brief              : Clase para la interaccion con la tabla consultas
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbconsultas
 * @brief: Clase para la interaccion con la tabla consultas
 */
 
class Dbconsultas extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $email = NULL;
  protected $telefono = NULL;
  protected $mensaje = NULL;
  protected $fecha = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setemail($mData = NULL) {
    if ($mData === NULL) { $this->email = NULL; }
    $this->email = StripHtml($mData);
  }

  public function settelefono($mData = NULL) {
    if ($mData === NULL) { $this->telefono = NULL; }
    $this->telefono = StripHtml($mData);
  }

  public function setmensaje($mData = NULL) {
    if ($mData === NULL) { $this->mensaje = NULL; }
    $this->mensaje = StripHtml($mData);
  }

  public function setfecha($mData = NULL) {
    if ($mData === NULL) { $this->fecha = NULL; }
    $this->fecha = StripHtml($mData);
  }

}
?>
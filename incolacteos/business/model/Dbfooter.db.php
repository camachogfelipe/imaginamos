<?php
/*
 * @file               : Dbfooter.db.php
 * @brief              : Clase para la interaccion con la tabla footer
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbfooter
 * @brief: Clase para la interaccion con la tabla footer
 */
 
class Dbfooter extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $direccion = NULL;
  protected $direccion1 = NULL;
  protected $telefono = NULL;
  protected $fax = NULL;
  protected $correo = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setdireccion($mData = NULL) {
    if ($mData === NULL) { $this->direccion = NULL; }
    $this->direccion = StripHtml($mData);
  }

  public function setdireccion1($mData = NULL) {
    if ($mData === NULL) { $this->direccion1 = NULL; }
    $this->direccion1 = StripHtml($mData);
  }

  public function settelefono($mData = NULL) {
    if ($mData === NULL) { $this->telefono = NULL; }
    $this->telefono = StripHtml($mData);
  }

  public function setfax($mData = NULL) {
    if ($mData === NULL) { $this->fax = NULL; }
    $this->fax = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

}
?>
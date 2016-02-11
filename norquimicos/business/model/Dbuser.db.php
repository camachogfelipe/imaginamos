<?php
/*
 * @file               : Dbuser.db.php
 * @brief              : Clase para la interaccion con la tabla user
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbuser
 * @brief: Clase para la interaccion con la tabla user
 */
 
class Dbuser extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $usuario = NULL;
  protected $contrasena = NULL;
  protected $sector = NULL;
  protected $bandera = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setusuario($mData = NULL) {
    if ($mData === NULL) { $this->usuario = NULL; }
    $this->usuario = StripHtml($mData);
  }

  public function setcontrasena($mData = NULL) {
    if ($mData === NULL) { $this->contrasena = NULL; }
    $this->contrasena = StripHtml($mData);
  }

  public function setsector($mData = NULL) {
    if ($mData === NULL) { $this->sector = NULL; }
    $this->sector = StripHtml($mData);
  }

  public function setbandera($mData = NULL) {
    if ($mData === NULL) { $this->bandera = NULL; }
    $this->bandera = StripHtml($mData);
  }

}
?>
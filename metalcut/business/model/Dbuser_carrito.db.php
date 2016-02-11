<?php
/*
 * @file               : Dbuser_carrito.db.php
 * @brief              : Clase para la interaccion con la tabla user_carrito
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbuser_carrito
 * @brief: Clase para la interaccion con la tabla user_carrito
 */
 
class Dbuser_carrito extends DbDAO {

  protected $iduser_carrito = NULL;
  protected $empresa = NULL;
  protected $nombre = NULL;
  protected $fecha_nacimiento = NULL;
  protected $genero = NULL;
  protected $ciudad = NULL;
  protected $correo = NULL;
  protected $contrasena = NULL;
  protected $nit_empresa = NULL;

  public function setiduser_carrito($mData = NULL) {
    if ($mData === NULL) { $this->iduser_carrito = NULL; }
    $this->iduser_carrito = StripHtml($mData);
  }

  public function setempresa($mData = NULL) {
    if ($mData === NULL) { $this->empresa = NULL; }
    $this->empresa = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setfecha_nacimiento($mData = NULL) {
    if ($mData === NULL) { $this->fecha_nacimiento = NULL; }
    $this->fecha_nacimiento = StripHtml($mData);
  }

  public function setgenero($mData = NULL) {
    if ($mData === NULL) { $this->genero = NULL; }
    $this->genero = StripHtml($mData);
  }

  public function setciudad($mData = NULL) {
    if ($mData === NULL) { $this->ciudad = NULL; }
    $this->ciudad = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

  public function setcontrasena($mData = NULL) {
    if ($mData === NULL) { $this->contrasena = NULL; }
    $this->contrasena = StripHtml($mData);
  }

  public function setnit_empresa($mData = NULL) {
    if ($mData === NULL) { $this->nit_empresa = NULL; }
    $this->nit_empresa = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbfooter.db.php
 * @brief              : Clase para la interaccion con la tabla footer
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbfooter
 * @brief: Clase para la interaccion con la tabla footer
 */
 
class Dbfooter extends DbDAO {

  public $id = NULL;
  protected $tel1 = NULL;
  protected $tel2 = NULL;
  protected $direccion = NULL;
  protected $ciudad = NULL;
  protected $correo = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settel1($mData = NULL) {
    if ($mData === NULL) { $this->tel1 = NULL; }
    $this->tel1 = StripHtml($mData);
  }

  public function settel2($mData = NULL) {
    if ($mData === NULL) { $this->tel2 = NULL; }
    $this->tel2 = StripHtml($mData);
  }

  public function setdireccion($mData = NULL) {
    if ($mData === NULL) { $this->direccion = NULL; }
    $this->direccion = StripHtml($mData);
  }

  public function setciudad($mData = NULL) {
    if ($mData === NULL) { $this->ciudad = NULL; }
    $this->ciudad = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

}
?>
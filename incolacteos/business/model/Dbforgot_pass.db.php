<?php
/*
 * @file               : Dbforgot_pass.db.php
 * @brief              : Clase para la interaccion con la tabla forgot_pass
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbforgot_pass
 * @brief: Clase para la interaccion con la tabla forgot_pass
 */
 
class Dbforgot_pass extends DbDAO {

  public $id = NULL;
  protected $id_usuario = NULL;
  protected $pass = NULL;
  protected $correo = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_usuario($mData = NULL) {
    if ($mData === NULL) { $this->id_usuario = NULL; }
    $this->id_usuario = StripHtml($mData);
  }

  public function setpass($mData = NULL) {
    if ($mData === NULL) { $this->pass = NULL; }
    $this->pass = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

}
?>
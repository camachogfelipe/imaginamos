<?php
/*
 * @file               : Dbenvio.db.php
 * @brief              : Clase para la interaccion con la tabla envio
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbenvio
 * @brief: Clase para la interaccion con la tabla envio
 */
 
class Dbenvio extends DbDAO {

  public $id = NULL;
  protected $correo = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

}
?>
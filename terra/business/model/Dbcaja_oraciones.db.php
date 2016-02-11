<?php
/*
 * @file               : Dbcaja_oraciones.db.php
 * @brief              : Clase para la interaccion con la tabla caja_oraciones
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcaja_oraciones
 * @brief: Clase para la interaccion con la tabla caja_oraciones
 */
 
class Dbcaja_oraciones extends DbDAO {

  public $id = NULL;
  protected $plegaria = NULL;
  protected $correo = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setplegaria($mData = NULL) {
    if ($mData === NULL) { $this->plegaria = NULL; }
    $this->plegaria = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

}
?>
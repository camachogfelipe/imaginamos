<?php
/*
 * @file               : Dboficinas.db.php
 * @brief              : Clase para la interaccion con la tabla oficinas
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dboficinas
 * @brief: Clase para la interaccion con la tabla oficinas
 */
 
class Dboficinas extends DbDAO {

  public $id = NULL;
  protected $ciudad = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setciudad($mData = NULL) {
    if ($mData === NULL) { $this->ciudad = NULL; }
    $this->ciudad = StripHtml($mData);
  }

}
?>
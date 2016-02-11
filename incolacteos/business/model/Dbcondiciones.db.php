<?php
/*
 * @file               : Dbcondiciones.db.php
 * @brief              : Clase para la interaccion con la tabla condiciones
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcondiciones
 * @brief: Clase para la interaccion con la tabla condiciones
 */
 
class Dbcondiciones extends DbDAO {

  public $id = NULL;
  protected $texto = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
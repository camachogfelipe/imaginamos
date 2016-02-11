<?php
/*
 * @file               : Dbpractica.db.php
 * @brief              : Clase para la interaccion con la tabla practica
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbpractica
 * @brief: Clase para la interaccion con la tabla practica
 */
 
class Dbpractica extends DbDAO {

  public $id = NULL;
  protected $item = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setitem($mData = NULL) {
    if ($mData === NULL) { $this->item = NULL; }
    $this->item = StripHtml($mData);
  }

}
?>
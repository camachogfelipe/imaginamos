<?php
/*
 * @file               : Dbcontacto.db.php
 * @brief              : Clase para la interaccion con la tabla contacto
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcontacto
 * @brief: Clase para la interaccion con la tabla contacto
 */
 
class Dbcontacto extends DbDAO {

  public $id = NULL;
  protected $contacto = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setcontacto($mData = NULL) {
    if ($mData === NULL) { $this->contacto = NULL; }
    $this->contacto = StripHtml($mData);
  }

}
?>
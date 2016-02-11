<?php
/*
 * @file               : Dbexperiencia.db.php
 * @brief              : Clase para la interaccion con la tabla experiencia
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbexperiencia
 * @brief: Clase para la interaccion con la tabla experiencia
 */
 
class Dbexperiencia extends DbDAO {

  public $id = NULL;
  protected $id_profesionales = NULL;
  protected $item = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_profesionales($mData = NULL) {
    if ($mData === NULL) { $this->id_profesionales = NULL; }
    $this->id_profesionales = StripHtml($mData);
  }

  public function setitem($mData = NULL) {
    if ($mData === NULL) { $this->item = NULL; }
    $this->item = StripHtml($mData);
  }

}
?>
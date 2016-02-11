<?php
/*
 * @file               : Dbleidos.db.php
 * @brief              : Clase para la interaccion con la tabla leidos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbleidos
 * @brief: Clase para la interaccion con la tabla leidos
 */
 
class Dbleidos extends DbDAO {

  public $id = NULL;
  protected $id_usuario = NULL;
  protected $leido = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_usuario($mData = NULL) {
    if ($mData === NULL) { $this->id_usuario = NULL; }
    $this->id_usuario = StripHtml($mData);
  }

  public function setleido($mData = NULL) {
    if ($mData === NULL) { $this->leido = NULL; }
    $this->leido = StripHtml($mData);
  }

}
?>
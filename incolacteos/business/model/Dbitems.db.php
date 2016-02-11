<?php
/*
 * @file               : Dbitems.db.php
 * @brief              : Clase para la interaccion con la tabla items
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbitems
 * @brief: Clase para la interaccion con la tabla items
 */
 
class Dbitems extends DbDAO {

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
<?php
/*
 * @file               : Dbgaleria.db.php
 * @brief              : Clase para la interaccion con la tabla galeria
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbgaleria
 * @brief: Clase para la interaccion con la tabla galeria
 */
 
class Dbgaleria extends DbDAO {

  public $id = NULL;
  protected $item_id = NULL;
  protected $imagen = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setitem_id($mData = NULL) {
    if ($mData === NULL) { $this->item_id = NULL; }
    $this->item_id = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
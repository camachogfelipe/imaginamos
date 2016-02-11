<?php
/*
 * @file               : Dbtextos.db.php
 * @brief              : Clase para la interaccion con la tabla textos
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbtextos
 * @brief: Clase para la interaccion con la tabla textos
 */
 
class Dbtextos extends DbDAO {

  public $id = NULL;
  protected $texto = NULL;
  protected $posicion = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setposicion($mData = NULL) {
    if ($mData === NULL) { $this->posicion = NULL; }
    $this->posicion = StripHtml($mData);
  }

}
?>
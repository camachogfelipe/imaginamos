<?php
/*
 * @file               : Dblineas_cat.db.php
 * @brief              : Clase para la interaccion con la tabla lineas_cat
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dblineas_cat
 * @brief: Clase para la interaccion con la tabla lineas_cat
 */
 
class Dblineas_cat extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

}
?>
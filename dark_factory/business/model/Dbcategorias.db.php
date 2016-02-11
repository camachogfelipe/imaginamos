<?php
/*
 * @file               : Dbcategorias.db.php
 * @brief              : Clase para la interaccion con la tabla categorias
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbcategorias
 * @brief: Clase para la interaccion con la tabla categorias
 */
 
class Dbcategorias extends DbDAO {

  public $id = NULL;
  protected $lineas_id = NULL;
  protected $categoria = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setlineas_id($mData = NULL) {
    if ($mData === NULL) { $this->lineas_id = NULL; }
    $this->lineas_id = StripHtml($mData);
  }

  public function setcategoria($mData = NULL) {
    if ($mData === NULL) { $this->categoria = NULL; }
    $this->categoria = StripHtml($mData);
  }

}
?>
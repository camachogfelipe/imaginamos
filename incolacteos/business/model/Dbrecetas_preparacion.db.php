<?php
/*
 * @file               : Dbrecetas_preparacion.db.php
 * @brief              : Clase para la interaccion con la tabla recetas_preparacion
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbrecetas_preparacion
 * @brief: Clase para la interaccion con la tabla recetas_preparacion
 */
 
class Dbrecetas_preparacion extends DbDAO {

  public $id = NULL;
  protected $id_receta = NULL;
  protected $pasos = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_receta($mData = NULL) {
    if ($mData === NULL) { $this->id_receta = NULL; }
    $this->id_receta = StripHtml($mData);
  }

  public function setpasos($mData = NULL) {
    if ($mData === NULL) { $this->pasos = NULL; }
    $this->pasos = StripHtml($mData);
  }

}
?>
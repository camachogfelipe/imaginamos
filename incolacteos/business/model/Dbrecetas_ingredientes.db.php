<?php
/*
 * @file               : Dbrecetas_ingredientes.db.php
 * @brief              : Clase para la interaccion con la tabla recetas_ingredientes
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbrecetas_ingredientes
 * @brief: Clase para la interaccion con la tabla recetas_ingredientes
 */
 
class Dbrecetas_ingredientes extends DbDAO {

  public $id = NULL;
  protected $id_recetas = NULL;
  protected $ingredientes = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_recetas($mData = NULL) {
    if ($mData === NULL) { $this->id_recetas = NULL; }
    $this->id_recetas = StripHtml($mData);
  }

  public function setingredientes($mData = NULL) {
    if ($mData === NULL) { $this->ingredientes = NULL; }
    $this->ingredientes = StripHtml($mData);
  }

}
?>
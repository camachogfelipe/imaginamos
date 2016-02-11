<?php
/*
 * @file               : Dbasociados.db.php
 * @brief              : Clase para la interaccion con la tabla asociados
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbasociados
 * @brief: Clase para la interaccion con la tabla asociados
 */
 
class Dbasociados extends DbDAO {

  public $id = NULL;
  protected $id_recetas = NULL;
  protected $id_asociados = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_recetas($mData = NULL) {
    if ($mData === NULL) { $this->id_recetas = NULL; }
    $this->id_recetas = StripHtml($mData);
  }

  public function setid_asociados($mData = NULL) {
    if ($mData === NULL) { $this->id_asociados = NULL; }
    $this->id_asociados = StripHtml($mData);
  }

}
?>
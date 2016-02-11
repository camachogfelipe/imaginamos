<?php
/*
 * @file               : Dbsubproductos_detalles.db.php
 * @brief              : Clase para la interaccion con la tabla subproductos_detalles
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbsubproductos_detalles
 * @brief: Clase para la interaccion con la tabla subproductos_detalles
 */
 
class Dbsubproductos_detalles extends DbDAO {

  public $id = NULL;
  protected $id_subproducto = NULL;
  protected $img = NULL;
  protected $texto = NULL;
  protected $receta = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_subproducto($mData = NULL) {
    if ($mData === NULL) { $this->id_subproducto = NULL; }
    $this->id_subproducto = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setreceta($mData = NULL) {
    if ($mData === NULL) { $this->receta = NULL; }
    $this->receta = StripHtml($mData);
  }

}
?>
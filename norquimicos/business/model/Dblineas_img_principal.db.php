<?php
/*
 * @file               : Dblineas_img_principal.db.php
 * @brief              : Clase para la interaccion con la tabla lineas_img_principal
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dblineas_img_principal
 * @brief: Clase para la interaccion con la tabla lineas_img_principal
 */
 
class Dblineas_img_principal extends DbDAO {

  public $id = NULL;
  protected $id_lineas_cat = NULL;
  protected $img = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_lineas_cat($mData = NULL) {
    if ($mData === NULL) { $this->id_lineas_cat = NULL; }
    $this->id_lineas_cat = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

}
?>
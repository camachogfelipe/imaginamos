<?php
/*
 * @file               : Dbimagenes.db.php
 * @brief              : Clase para la interaccion con la tabla imagenes
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimagenes
 * @brief: Clase para la interaccion con la tabla imagenes
 */
 
class Dbimagenes extends DbDAO {

  public $id = NULL;
  protected $id_lineas_img = NULL;
  protected $img = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_lineas_img($mData = NULL) {
    if ($mData === NULL) { $this->id_lineas_img = NULL; }
    $this->id_lineas_img = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

}
?>
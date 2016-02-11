<?php
/*
 * @file               : Dbintimidad_img.db.php
 * @brief              : Clase para la interaccion con la tabla intimidad_img
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbintimidad_img
 * @brief: Clase para la interaccion con la tabla intimidad_img
 */
 
class Dbintimidad_img extends DbDAO {

  public $id = NULL;
  protected $id_intimidad_noticias = NULL;
  protected $img = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_intimidad_noticias($mData = NULL) {
    if ($mData === NULL) { $this->id_intimidad_noticias = NULL; }
    $this->id_intimidad_noticias = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

}
?>
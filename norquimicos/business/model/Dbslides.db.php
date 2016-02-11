<?php
/*
 * @file               : Dbslides.db.php
 * @brief              : Clase para la interaccion con la tabla slides
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbslides
 * @brief: Clase para la interaccion con la tabla slides
 */
 
class Dbslides extends DbDAO {

  public $id = NULL;
  protected $img_fondo = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setimg_fondo($mData = NULL) {
    if ($mData === NULL) { $this->img_fondo = NULL; }
    $this->img_fondo = StripHtml($mData);
  }

}
?>
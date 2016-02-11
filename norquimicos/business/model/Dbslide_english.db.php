<?php
/*
 * @file               : Dbslide_english.db.php
 * @brief              : Clase para la interaccion con la tabla slide_english
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbslide_english
 * @brief: Clase para la interaccion con la tabla slide_english
 */
 
class Dbslide_english extends DbDAO {

  public $id = NULL;
  protected $img = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

}
?>
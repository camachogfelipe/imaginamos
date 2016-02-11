<?php
/*
 * @file               : Dbbanner.db.php
 * @brief              : Clase para la interaccion con la tabla banner
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbanner
 * @brief: Clase para la interaccion con la tabla banner
 */
 
class Dbbanner extends DbDAO {

  public $id = NULL;
  protected $img = NULL;
  protected $posicion = NULL;
  protected $link = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function setposicion($mData = NULL) {
    if ($mData === NULL) { $this->posicion = NULL; }
    $this->posicion = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

}
?>
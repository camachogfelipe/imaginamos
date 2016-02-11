<?php
/*
 * @file               : Dbbullet_contactenos.db.php
 * @brief              : Clase para la interaccion con la tabla bullet_contactenos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbullet_contactenos
 * @brief: Clase para la interaccion con la tabla bullet_contactenos
 */
 
class Dbbullet_contactenos extends DbDAO {

  public $id = NULL;
  protected $bullet = NULL;
  protected $posicion = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setbullet($mData = NULL) {
    if ($mData === NULL) { $this->bullet = NULL; }
    $this->bullet = StripHtml($mData);
  }

  public function setposicion($mData = NULL) {
    if ($mData === NULL) { $this->posicion = NULL; }
    $this->posicion = StripHtml($mData);
  }

}
?>
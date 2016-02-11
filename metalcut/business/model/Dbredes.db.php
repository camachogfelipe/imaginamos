<?php
/*
 * @file               : Dbredes.db.php
 * @brief              : Clase para la interaccion con la tabla redes
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbredes
 * @brief: Clase para la interaccion con la tabla redes
 */
 
class Dbredes extends DbDAO {

  protected $idredes = NULL;
  protected $facebook = NULL;
  protected $twiter = NULL;

  public function setidredes($mData = NULL) {
    if ($mData === NULL) { $this->idredes = NULL; }
    $this->idredes = StripHtml($mData);
  }

  public function setfacebook($mData = NULL) {
    if ($mData === NULL) { $this->facebook = NULL; }
    $this->facebook = StripHtml($mData);
  }

  public function settwiter($mData = NULL) {
    if ($mData === NULL) { $this->twiter = NULL; }
    $this->twiter = StripHtml($mData);
  }

}
?>
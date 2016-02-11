<?php
/*
 * @file               : Dbradio.db.php
 * @brief              : Clase para la interaccion con la tabla radio
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbradio
 * @brief: Clase para la interaccion con la tabla radio
 */
 
class Dbradio extends DbDAO {

  protected $idradio = NULL;
  protected $imagen = NULL;

  public function setidradio($mData = NULL) {
    if ($mData === NULL) { $this->idradio = NULL; }
    $this->idradio = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
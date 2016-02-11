<?php
/*
 * @file               : Dblongitud.db.php
 * @brief              : Clase para la interaccion con la tabla longitud
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dblongitud
 * @brief: Clase para la interaccion con la tabla longitud
 */
 
class Dblongitud extends DbDAO {

  protected $idlongitud = NULL;
  protected $imagen = NULL;

  public function setidlongitud($mData = NULL) {
    if ($mData === NULL) { $this->idlongitud = NULL; }
    $this->idlongitud = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
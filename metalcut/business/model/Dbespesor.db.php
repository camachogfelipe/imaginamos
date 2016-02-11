<?php
/*
 * @file               : Dbespesor.db.php
 * @brief              : Clase para la interaccion con la tabla espesor
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbespesor
 * @brief: Clase para la interaccion con la tabla espesor
 */
 
class Dbespesor extends DbDAO {

  protected $idespesor = NULL;
  protected $imagen = NULL;

  public function setidespesor($mData = NULL) {
    if ($mData === NULL) { $this->idespesor = NULL; }
    $this->idespesor = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
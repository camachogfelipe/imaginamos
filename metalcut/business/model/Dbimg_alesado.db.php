<?php
/*
 * @file               : Dbimg_alesado.db.php
 * @brief              : Clase para la interaccion con la tabla img_alesado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_alesado
 * @brief: Clase para la interaccion con la tabla img_alesado
 */
 
class Dbimg_alesado extends DbDAO {

  protected $idimg_alesado = NULL;
  protected $imagen = NULL;

  public function setidimg_alesado($mData = NULL) {
    if ($mData === NULL) { $this->idimg_alesado = NULL; }
    $this->idimg_alesado = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
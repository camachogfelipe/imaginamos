<?php
/*
 * @file               : Dbimg_roscado.db.php
 * @brief              : Clase para la interaccion con la tabla img_roscado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_roscado
 * @brief: Clase para la interaccion con la tabla img_roscado
 */
 
class Dbimg_roscado extends DbDAO {

  protected $idimg_roscado = NULL;
  protected $idproductos_roscado = NULL;
  protected $imagen = NULL;

  public function setidimg_roscado($mData = NULL) {
    if ($mData === NULL) { $this->idimg_roscado = NULL; }
    $this->idimg_roscado = StripHtml($mData);
  }

  public function setidproductos_roscado($mData = NULL) {
    if ($mData === NULL) { $this->idproductos_roscado = NULL; }
    $this->idproductos_roscado = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
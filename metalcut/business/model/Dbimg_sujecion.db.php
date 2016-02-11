<?php
/*
 * @file               : Dbimg_sujecion.db.php
 * @brief              : Clase para la interaccion con la tabla img_sujecion
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_sujecion
 * @brief: Clase para la interaccion con la tabla img_sujecion
 */
 
class Dbimg_sujecion extends DbDAO {

  protected $idimg_sujecion = NULL;
  protected $idproductos_sujecion = NULL;
  protected $imagen = NULL;

  public function setidimg_sujecion($mData = NULL) {
    if ($mData === NULL) { $this->idimg_sujecion = NULL; }
    $this->idimg_sujecion = StripHtml($mData);
  }

  public function setidproductos_sujecion($mData = NULL) {
    if ($mData === NULL) { $this->idproductos_sujecion = NULL; }
    $this->idproductos_sujecion = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
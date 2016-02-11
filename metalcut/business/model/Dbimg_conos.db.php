<?php
/*
 * @file               : Dbimg_conos.db.php
 * @brief              : Clase para la interaccion con la tabla img_conos
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_conos
 * @brief: Clase para la interaccion con la tabla img_conos
 */
 
class Dbimg_conos extends DbDAO {

  protected $idimg_conos = NULL;
  protected $idproductos_conos = NULL;
  protected $imagen = NULL;

  public function setidimg_conos($mData = NULL) {
    if ($mData === NULL) { $this->idimg_conos = NULL; }
    $this->idimg_conos = StripHtml($mData);
  }

  public function setidproductos_conos($mData = NULL) {
    if ($mData === NULL) { $this->idproductos_conos = NULL; }
    $this->idproductos_conos = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
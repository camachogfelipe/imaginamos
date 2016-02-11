<?php
/*
 * @file               : Dbimg_planchado.db.php
 * @brief              : Clase para la interaccion con la tabla img_planchado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_planchado
 * @brief: Clase para la interaccion con la tabla img_planchado
 */
 
class Dbimg_planchado extends DbDAO {

  protected $idimg_planchado = NULL;
  protected $imagen = NULL;

  public function setidimg_planchado($mData = NULL) {
    if ($mData === NULL) { $this->idimg_planchado = NULL; }
    $this->idimg_planchado = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
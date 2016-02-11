<?php
/*
 * @file               : Dbimg_accesorio.db.php
 * @brief              : Clase para la interaccion con la tabla img_accesorio
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_accesorio
 * @brief: Clase para la interaccion con la tabla img_accesorio
 */
 
class Dbimg_accesorio extends DbDAO {

  protected $idimg_accesorio = NULL;
  protected $imagen = NULL;

  public function setidimg_accesorio($mData = NULL) {
    if ($mData === NULL) { $this->idimg_accesorio = NULL; }
    $this->idimg_accesorio = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbimg_copiado.db.php
 * @brief              : Clase para la interaccion con la tabla img_copiado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_copiado
 * @brief: Clase para la interaccion con la tabla img_copiado
 */
 
class Dbimg_copiado extends DbDAO {

  protected $idimg_copiado = NULL;
  protected $imagen = NULL;

  public function setidimg_copiado($mData = NULL) {
    if ($mData === NULL) { $this->idimg_copiado = NULL; }
    $this->idimg_copiado = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
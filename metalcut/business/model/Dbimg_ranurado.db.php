<?php
/*
 * @file               : Dbimg_ranurado.db.php
 * @brief              : Clase para la interaccion con la tabla img_ranurado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_ranurado
 * @brief: Clase para la interaccion con la tabla img_ranurado
 */
 
class Dbimg_ranurado extends DbDAO {

  protected $idimg_ranurado = NULL;
  protected $imagen = NULL;

  public function setidimg_ranurado($mData = NULL) {
    if ($mData === NULL) { $this->idimg_ranurado = NULL; }
    $this->idimg_ranurado = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
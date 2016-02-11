<?php
/*
 * @file               : Dbimg_taladrado.db.php
 * @brief              : Clase para la interaccion con la tabla img_taladrado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_taladrado
 * @brief: Clase para la interaccion con la tabla img_taladrado
 */
 
class Dbimg_taladrado extends DbDAO {

  protected $idimg_taladrado = NULL;
  protected $imagen = NULL;

  public function setidimg_taladrado($mData = NULL) {
    if ($mData === NULL) { $this->idimg_taladrado = NULL; }
    $this->idimg_taladrado = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbimg_escuadrado.db.php
 * @brief              : Clase para la interaccion con la tabla img_escuadrado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_escuadrado
 * @brief: Clase para la interaccion con la tabla img_escuadrado
 */
 
class Dbimg_escuadrado extends DbDAO {

  protected $idimg_escuadrado = NULL;
  protected $imagen = NULL;

  public function setidimg_escuadrado($mData = NULL) {
    if ($mData === NULL) { $this->idimg_escuadrado = NULL; }
    $this->idimg_escuadrado = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
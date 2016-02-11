<?php
/*
 * @file               : Dbimg_cilindrado.db.php
 * @brief              : Clase para la interaccion con la tabla img_cilindrado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimg_cilindrado
 * @brief: Clase para la interaccion con la tabla img_cilindrado
 */
 
class Dbimg_cilindrado extends DbDAO {

  protected $idimg_cilindrado = NULL;
  protected $imagen = NULL;

  public function setidimg_cilindrado($mData = NULL) {
    if ($mData === NULL) { $this->idimg_cilindrado = NULL; }
    $this->idimg_cilindrado = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
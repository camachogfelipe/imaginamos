<?php
/*
 * @file               : Dbangulo.db.php
 * @brief              : Clase para la interaccion con la tabla angulo
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbangulo
 * @brief: Clase para la interaccion con la tabla angulo
 */
 
class Dbangulo extends DbDAO {

  protected $idangulo = NULL;
  protected $imagen = NULL;

  public function setidangulo($mData = NULL) {
    if ($mData === NULL) { $this->idangulo = NULL; }
    $this->idangulo = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
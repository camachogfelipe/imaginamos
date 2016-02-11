<?php
/*
 * @file               : Dbbanner.db.php
 * @brief              : Clase para la interaccion con la tabla banner
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbanner
 * @brief: Clase para la interaccion con la tabla banner
 */
 
class Dbbanner extends DbDAO {

  protected $idbanner = NULL;
  protected $titulo = NULL;
  protected $imagen = NULL;

  public function setidbanner($mData = NULL) {
    if ($mData === NULL) { $this->idbanner = NULL; }
    $this->idbanner = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbbanner_dos.db.php
 * @brief              : Clase para la interaccion con la tabla banner_dos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbanner_dos
 * @brief: Clase para la interaccion con la tabla banner_dos
 */
 
class Dbbanner_dos extends DbDAO {

  protected $idbanner_dos = NULL;
  protected $titulo = NULL;
  protected $imagen = NULL;

  public function setidbanner_dos($mData = NULL) {
    if ($mData === NULL) { $this->idbanner_dos = NULL; }
    $this->idbanner_dos = StripHtml($mData);
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
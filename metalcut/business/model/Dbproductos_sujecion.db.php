<?php
/*
 * @file               : Dbproductos_sujecion.db.php
 * @brief              : Clase para la interaccion con la tabla productos_sujecion
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbproductos_sujecion
 * @brief: Clase para la interaccion con la tabla productos_sujecion
 */
 
class Dbproductos_sujecion extends DbDAO {

  protected $idproductos_sujecion = NULL;
  protected $idsujecion = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidproductos_sujecion($mData = NULL) {
    if ($mData === NULL) { $this->idproductos_sujecion = NULL; }
    $this->idproductos_sujecion = StripHtml($mData);
  }

  public function setidsujecion($mData = NULL) {
    if ($mData === NULL) { $this->idsujecion = NULL; }
    $this->idsujecion = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
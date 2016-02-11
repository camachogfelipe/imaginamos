<?php
/*
 * @file               : Dbproductos_roscado.db.php
 * @brief              : Clase para la interaccion con la tabla productos_roscado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbproductos_roscado
 * @brief: Clase para la interaccion con la tabla productos_roscado
 */
 
class Dbproductos_roscado extends DbDAO {

  protected $idproductos_roscado = NULL;
  protected $idroscado = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidproductos_roscado($mData = NULL) {
    if ($mData === NULL) { $this->idproductos_roscado = NULL; }
    $this->idproductos_roscado = StripHtml($mData);
  }

  public function setidroscado($mData = NULL) {
    if ($mData === NULL) { $this->idroscado = NULL; }
    $this->idroscado = StripHtml($mData);
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
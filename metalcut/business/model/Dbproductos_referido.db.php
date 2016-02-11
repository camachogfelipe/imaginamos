<?php
/*
 * @file               : Dbproductos_referido.db.php
 * @brief              : Clase para la interaccion con la tabla productos_referido
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-08
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbproductos_referido
 * @brief: Clase para la interaccion con la tabla productos_referido
 */
 
class Dbproductos_referido extends DbDAO {

  protected $idproductos_referido = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;
  protected $valor = NULL;

  public function setidproductos_referido($mData = NULL) {
    if ($mData === NULL) { $this->idproductos_referido = NULL; }
    $this->idproductos_referido = StripHtml($mData);
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

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

}
?>
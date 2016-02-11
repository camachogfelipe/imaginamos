<?php
/*
 * @file               : Dbproductos_detalles.db.php
 * @brief              : Clase para la interaccion con la tabla productos_detalles
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbproductos_detalles
 * @brief: Clase para la interaccion con la tabla productos_detalles
 */
 
class Dbproductos_detalles extends DbDAO {

  public $id = NULL;
  protected $id_productos = NULL;
  protected $titulo = NULL;
  protected $img = NULL;
  protected $texto = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_productos($mData = NULL) {
    if ($mData === NULL) { $this->id_productos = NULL; }
    $this->id_productos = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbproductos.db.php
 * @brief              : Clase para la interaccion con la tabla productos
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbproductos
 * @brief: Clase para la interaccion con la tabla productos
 */
 
class Dbproductos extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $referencia = NULL;
  protected $img = NULL;
  protected $texto = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setreferencia($mData = NULL) {
    if ($mData === NULL) { $this->referencia = NULL; }
    $this->referencia = StripHtml($mData);
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
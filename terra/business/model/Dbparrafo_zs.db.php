<?php
/*
 * @file               : Dbparrafo_zs.db.php
 * @brief              : Clase para la interaccion con la tabla parrafo_zs
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbparrafo_zs
 * @brief: Clase para la interaccion con la tabla parrafo_zs
 */
 
class Dbparrafo_zs extends DbDAO {

  public $id = NULL;
  protected $texto = NULL;
  protected $exclusiva = NULL;
  protected $condiciones = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setexclusiva($mData = NULL) {
    if ($mData === NULL) { $this->exclusiva = NULL; }
    $this->exclusiva = StripHtml($mData);
  }

  public function setcondiciones($mData = NULL) {
    if ($mData === NULL) { $this->condiciones = NULL; }
    $this->condiciones = StripHtml($mData);
  }

}
?>
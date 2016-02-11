<?php
/*
 * @file               : Dbpromociones_detalles.db.php
 * @brief              : Clase para la interaccion con la tabla promociones_detalles
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbpromociones_detalles
 * @brief: Clase para la interaccion con la tabla promociones_detalles
 */
 
class Dbpromociones_detalles extends DbDAO {

  public $id = NULL;
  protected $id_promociones = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $img = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_promociones($mData = NULL) {
    if ($mData === NULL) { $this->id_promociones = NULL; }
    $this->id_promociones = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

}
?>
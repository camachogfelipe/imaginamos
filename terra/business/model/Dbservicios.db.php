<?php
/*
 * @file               : Dbservicios.db.php
 * @brief              : Clase para la interaccion con la tabla servicios
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbservicios
 * @brief: Clase para la interaccion con la tabla servicios
 */
 
class Dbservicios extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $img = NULL;
  protected $texto_corto = NULL;
  protected $texto_largo = NULL;
  protected $posicion = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function settexto_corto($mData = NULL) {
    if ($mData === NULL) { $this->texto_corto = NULL; }
    $this->texto_corto = StripHtml($mData);
  }

  public function settexto_largo($mData = NULL) {
    if ($mData === NULL) { $this->texto_largo = NULL; }
    $this->texto_largo = StripHtml($mData);
  }

  public function setposicion($mData = NULL) {
    if ($mData === NULL) { $this->posicion = NULL; }
    $this->posicion = StripHtml($mData);
  }

}
?>
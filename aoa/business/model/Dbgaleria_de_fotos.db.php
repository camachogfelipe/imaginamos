<?php
/*
 * @file               : Dbgaleria_de_fotos.db.php
 * @brief              : Clase para la interaccion con la tabla galeria_de_fotos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbgaleria_de_fotos
 * @brief: Clase para la interaccion con la tabla galeria_de_fotos
 */
 
class Dbgaleria_de_fotos extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
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
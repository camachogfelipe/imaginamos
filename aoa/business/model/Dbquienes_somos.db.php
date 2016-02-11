<?php
/*
 * @file               : Dbquienes_somos.db.php
 * @brief              : Clase para la interaccion con la tabla quienes_somos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbquienes_somos
 * @brief: Clase para la interaccion con la tabla quienes_somos
 */
 
class Dbquienes_somos extends DbDAO {

  public $id = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;
  protected $imagen_2 = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setimagen_2($mData = NULL) {
    if ($mData === NULL) { $this->imagen_2 = NULL; }
    $this->imagen_2 = StripHtml($mData);
  }

}
?>
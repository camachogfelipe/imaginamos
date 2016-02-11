<?php
/*
 * @file               : Dbquienes_des.db.php
 * @brief              : Clase para la interaccion con la tabla quienes_des
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbquienes_des
 * @brief: Clase para la interaccion con la tabla quienes_des
 */
 
class Dbquienes_des extends DbDAO {

  protected $idquienes_des = NULL;
  protected $titulo = NULL;
  protected $descripcion = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidquienes_des($mData = NULL) {
    if ($mData === NULL) { $this->idquienes_des = NULL; }
    $this->idquienes_des = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setdescripcion($mData = NULL) {
    if ($mData === NULL) { $this->descripcion = NULL; }
    $this->descripcion = StripHtml($mData);
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
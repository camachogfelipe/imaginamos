<?php
/*
 * @file               : Dbgaleria_imagenes.db.php
 * @brief              : Clase para la interaccion con la tabla galeria_imagenes
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-14
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbgaleria_imagenes
 * @brief: Clase para la interaccion con la tabla galeria_imagenes
 */
 
class Dbgaleria_imagenes extends DbDAO {

  protected $idgaleria_imagenes = NULL;
  protected $idgaleria = NULL;
  protected $imagen = NULL;

  public function setidgaleria_imagenes($mData = NULL) {
    if ($mData === NULL) { $this->idgaleria_imagenes = NULL; }
    $this->idgaleria_imagenes = StripHtml($mData);
  }

  public function setidgaleria($mData = NULL) {
    if ($mData === NULL) { $this->idgaleria = NULL; }
    $this->idgaleria = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
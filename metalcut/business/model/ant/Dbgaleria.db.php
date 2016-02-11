<?php
/*
 * @file               : Dbgaleria.db.php
 * @brief              : Clase para la interaccion con la tabla galeria
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-14
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbgaleria
 * @brief: Clase para la interaccion con la tabla galeria
 */
 
class Dbgaleria extends DbDAO {

  protected $idgaleria = NULL;
  protected $id_collage = NULL;
  protected $id_imagen = NULL;
  protected $titulo = NULL;
  protected $descripcion = NULL;
  protected $imagen = NULL;

  public function setidgaleria($mData = NULL) {
    if ($mData === NULL) { $this->idgaleria = NULL; }
    $this->idgaleria = StripHtml($mData);
  }

  public function setid_collage($mData = NULL) {
    if ($mData === NULL) { $this->id_collage = NULL; }
    $this->id_collage = StripHtml($mData);
  }

  public function setid_imagen($mData = NULL) {
    if ($mData === NULL) { $this->id_imagen = NULL; }
    $this->id_imagen = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setdescripcion($mData = NULL) {
    if ($mData === NULL) { $this->descripcion = NULL; }
    $this->descripcion = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbrecetas.db.php
 * @brief              : Clase para la interaccion con la tabla recetas
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbrecetas
 * @brief: Clase para la interaccion con la tabla recetas
 */
 
class Dbrecetas extends DbDAO {

  public $id = NULL;
  protected $img = NULL;
  protected $thumb = NULL;
  protected $titulo = NULL;
  protected $texto_ingredientes = NULL;
  protected $asociados = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function setthumb($mData = NULL) {
    if ($mData === NULL) { $this->thumb = NULL; }
    $this->thumb = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto_ingredientes($mData = NULL) {
    if ($mData === NULL) { $this->texto_ingredientes = NULL; }
    $this->texto_ingredientes = StripHtml($mData);
  }

  public function setasociados($mData = NULL) {
    if ($mData === NULL) { $this->asociados = NULL; }
    $this->asociados = StripHtml($mData);
  }

}
?>
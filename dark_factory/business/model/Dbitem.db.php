<?php
/*
 * @file               : Dbitem.db.php
 * @brief              : Clase para la interaccion con la tabla item
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbitem
 * @brief: Clase para la interaccion con la tabla item
 */
 
class Dbitem extends DbDAO {

  public $id = NULL;
  protected $categorias_id = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $url = NULL;
  protected $imagen = NULL;
  protected $link = NULL;
  protected $texto_mapa = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setcategorias_id($mData = NULL) {
    if ($mData === NULL) { $this->categorias_id = NULL; }
    $this->categorias_id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function seturl($mData = NULL) {
    if ($mData === NULL) { $this->url = NULL; }
    $this->url = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

  public function settexto_mapa($mData = NULL) {
    if ($mData === NULL) { $this->texto_mapa = NULL; }
    $this->texto_mapa = StripHtml($mData);
  }

}
?>
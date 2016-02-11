<?php
/*
 * @file               : Dbsubcategoria_obras.db.php
 * @brief              : Clase para la interaccion con la tabla subcategoria_obras
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbsubcategoria_obras
 * @brief: Clase para la interaccion con la tabla subcategoria_obras
 */
 
class Dbsubcategoria_obras extends DbDAO {

  protected $idsubcategoria_obras = NULL;
  protected $idcategoria = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;

  public function setidsubcategoria_obras($mData = NULL) {
    if ($mData === NULL) { $this->idsubcategoria_obras = NULL; }
    $this->idsubcategoria_obras = StripHtml($mData);
  }

  public function setidcategoria($mData = NULL) {
    if ($mData === NULL) { $this->idcategoria = NULL; }
    $this->idcategoria = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
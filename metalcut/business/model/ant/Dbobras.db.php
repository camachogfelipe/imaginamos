<?php
/*
 * @file               : Dbobras.db.php
 * @brief              : Clase para la interaccion con la tabla obras
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbobras
 * @brief: Clase para la interaccion con la tabla obras
 */
 
class Dbobras extends DbDAO {

  protected $idobras = NULL;
  protected $idcategoria_obras = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;

  public function setidobras($mData = NULL) {
    if ($mData === NULL) { $this->idobras = NULL; }
    $this->idobras = StripHtml($mData);
  }

  public function setidcategoria_obras($mData = NULL) {
    if ($mData === NULL) { $this->idcategoria_obras = NULL; }
    $this->idcategoria_obras = StripHtml($mData);
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
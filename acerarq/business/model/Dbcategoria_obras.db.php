<?php
/*
 * @file               : Dbcategoria_obras.db.php
 * @brief              : Clase para la interaccion con la tabla categoria_obras
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcategoria_obras
 * @brief: Clase para la interaccion con la tabla categoria_obras
 */
 
class Dbcategoria_obras extends DbDAO {

  protected $idcategoria_obras = NULL;
  protected $titulo = NULL;

  public function setidcategoria_obras($mData = NULL) {
    if ($mData === NULL) { $this->idcategoria_obras = NULL; }
    $this->idcategoria_obras = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

}
?>
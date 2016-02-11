<?php
/*
 * @file               : Dblineas.db.php
 * @brief              : Clase para la interaccion con la tabla lineas
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dblineas
 * @brief: Clase para la interaccion con la tabla lineas
 */
 
class Dblineas extends DbDAO {

  public $id = NULL;
  protected $nombre_de_linea = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre_de_linea($mData = NULL) {
    if ($mData === NULL) { $this->nombre_de_linea = NULL; }
    $this->nombre_de_linea = StripHtml($mData);
  }

}
?>
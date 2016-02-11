<?php
/*
 * @file               : Dbportaherramientas.db.php
 * @brief              : Clase para la interaccion con la tabla portaherramientas
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbportaherramientas
 * @brief: Clase para la interaccion con la tabla portaherramientas
 */
 
class Dbportaherramientas extends DbDAO {

  protected $idportaherramientas = NULL;
  protected $modulo = NULL;
  protected $idporta_cabe = NULL;

  public function setidportaherramientas($mData = NULL) {
    if ($mData === NULL) { $this->idportaherramientas = NULL; }
    $this->idportaherramientas = StripHtml($mData);
  }

  public function setmodulo($mData = NULL) {
    if ($mData === NULL) { $this->modulo = NULL; }
    $this->modulo = StripHtml($mData);
  }

  public function setidporta_cabe($mData = NULL) {
    if ($mData === NULL) { $this->idporta_cabe = NULL; }
    $this->idporta_cabe = StripHtml($mData);
  }

}
?>
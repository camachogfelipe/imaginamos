<?php
/*
 * @file               : Dbdescripcion_oficina.db.php
 * @brief              : Clase para la interaccion con la tabla descripcion_oficina
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbdescripcion_oficina
 * @brief: Clase para la interaccion con la tabla descripcion_oficina
 */
 
class Dbdescripcion_oficina extends DbDAO {

  public $id = NULL;
  protected $oficinas_id = NULL;
  protected $titulo = NULL;
  protected $linea1 = NULL;
  protected $linea2 = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setoficinas_id($mData = NULL) {
    if ($mData === NULL) { $this->oficinas_id = NULL; }
    $this->oficinas_id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setlinea1($mData = NULL) {
    if ($mData === NULL) { $this->linea1 = NULL; }
    $this->linea1 = StripHtml($mData);
  }

  public function setlinea2($mData = NULL) {
    if ($mData === NULL) { $this->linea2 = NULL; }
    $this->linea2 = StripHtml($mData);
  }

}
?>
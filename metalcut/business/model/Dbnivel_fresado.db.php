<?php
/*
 * @file               : Dbnivel_fresado.db.php
 * @brief              : Clase para la interaccion con la tabla nivel_fresado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-08
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbnivel_fresado
 * @brief: Clase para la interaccion con la tabla nivel_fresado
 */
 
class Dbnivel_fresado extends DbDAO {

  protected $idnivel_fresado = NULL;
  protected $idportafolio_fresado = NULL;
  protected $titulo = NULL;
  protected $nivel = NULL;

  public function setidnivel_fresado($mData = NULL) {
    if ($mData === NULL) { $this->idnivel_fresado = NULL; }
    $this->idnivel_fresado = StripHtml($mData);
  }

  public function setidportafolio_fresado($mData = NULL) {
    if ($mData === NULL) { $this->idportafolio_fresado = NULL; }
    $this->idportafolio_fresado = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setnivel($mData = NULL) {
    if ($mData === NULL) { $this->nivel = NULL; }
    $this->nivel = StripHtml($mData);
  }

}
?>
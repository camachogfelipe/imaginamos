<?php
/*
 * @file               : Dbnivel_carburo.db.php
 * @brief              : Clase para la interaccion con la tabla nivel_carburo
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-08
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbnivel_carburo
 * @brief: Clase para la interaccion con la tabla nivel_carburo
 */
 
class Dbnivel_carburo extends DbDAO {

  protected $idnivel_carburo = NULL;
  protected $idportafolio_carburo = NULL;
  protected $titulo = NULL;
  protected $nivel = NULL;

  public function setidnivel_carburo($mData = NULL) {
    if ($mData === NULL) { $this->idnivel_carburo = NULL; }
    $this->idnivel_carburo = StripHtml($mData);
  }

  public function setidportafolio_carburo($mData = NULL) {
    if ($mData === NULL) { $this->idportafolio_carburo = NULL; }
    $this->idportafolio_carburo = StripHtml($mData);
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
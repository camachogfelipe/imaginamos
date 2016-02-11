<?php
/*
 * @file               : Dbnivel_portafolio.db.php
 * @brief              : Clase para la interaccion con la tabla nivel_portafolio
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-08
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbnivel_portafolio
 * @brief: Clase para la interaccion con la tabla nivel_portafolio
 */
 
class Dbnivel_portafolio extends DbDAO {

  protected $idnivel_portafolio = NULL;
  protected $idportafolio = NULL;
  protected $titulo = NULL;
  protected $nivel = NULL;

  public function setidnivel_portafolio($mData = NULL) {
    if ($mData === NULL) { $this->idnivel_portafolio = NULL; }
    $this->idnivel_portafolio = StripHtml($mData);
  }

  public function setidportafolio($mData = NULL) {
    if ($mData === NULL) { $this->idportafolio = NULL; }
    $this->idportafolio = StripHtml($mData);
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
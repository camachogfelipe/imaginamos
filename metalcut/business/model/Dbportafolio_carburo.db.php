<?php
/*
 * @file               : Dbportafolio_carburo.db.php
 * @brief              : Clase para la interaccion con la tabla portafolio_carburo
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-09
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbportafolio_carburo
 * @brief: Clase para la interaccion con la tabla portafolio_carburo
 */
 
class Dbportafolio_carburo extends DbDAO {

  protected $idportafolio_carburo = NULL;
  protected $modulo = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;
  protected $paso = NULL;
  protected $nivel = NULL;

  public function setidportafolio_carburo($mData = NULL) {
    if ($mData === NULL) { $this->idportafolio_carburo = NULL; }
    $this->idportafolio_carburo = StripHtml($mData);
  }

  public function setmodulo($mData = NULL) {
    if ($mData === NULL) { $this->modulo = NULL; }
    $this->modulo = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setpaso($mData = NULL) {
    if ($mData === NULL) { $this->paso = NULL; }
    $this->paso = StripHtml($mData);
  }

  public function setnivel($mData = NULL) {
    if ($mData === NULL) { $this->nivel = NULL; }
    $this->nivel = StripHtml($mData);
  }

}
?>
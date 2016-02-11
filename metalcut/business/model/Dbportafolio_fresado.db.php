<?php
/*
 * @file               : Dbportafolio_fresado.db.php
 * @brief              : Clase para la interaccion con la tabla portafolio_fresado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-09
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbportafolio_fresado
 * @brief: Clase para la interaccion con la tabla portafolio_fresado
 */
 
class Dbportafolio_fresado extends DbDAO {

  protected $idportafolio_fresado = NULL;
  protected $modulo = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;
  protected $paso = NULL;
  protected $nivel = NULL;
  protected $orientacion = NULL;

  public function setidportafolio_fresado($mData = NULL) {
    if ($mData === NULL) { $this->idportafolio_fresado = NULL; }
    $this->idportafolio_fresado = StripHtml($mData);
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
  
  public function setorientacion($mData = NULL) {
    if ($mData === NULL) { $this->orientacion = NULL; }
    $this->orientacion = StripHtml($mData);
  }

}
?>
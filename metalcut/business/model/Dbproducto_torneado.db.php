<?php
/*
 * @file               : Dbproducto_torneado.db.php
 * @brief              : Clase para la interaccion con la tabla producto_torneado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbproducto_torneado
 * @brief: Clase para la interaccion con la tabla producto_torneado
 */
 
class Dbproducto_torneado extends DbDAO {

  protected $idproducto_torneado = NULL;
  protected $idtipo_inserto = NULL;
  protected $idmateriales = NULL;
  protected $idgeometria = NULL;
  protected $idangulo = NULL;
  protected $idlongitud = NULL;
  protected $idespesor = NULL;
  protected $idradio = NULL;
  protected $idtipo_corte = NULL;
  protected $valor = NULL;
  protected $imagen = NULL;

  public function setidproducto_torneado($mData = NULL) {
    if ($mData === NULL) { $this->idproducto_torneado = NULL; }
    $this->idproducto_torneado = StripHtml($mData);
  }

  public function setidtipo_inserto($mData = NULL) {
    if ($mData === NULL) { $this->idtipo_inserto = NULL; }
    $this->idtipo_inserto = StripHtml($mData);
  }

  public function setidmateriales($mData = NULL) {
    if ($mData === NULL) { $this->idmateriales = NULL; }
    $this->idmateriales = StripHtml($mData);
  }

  public function setidgeometria($mData = NULL) {
    if ($mData === NULL) { $this->idgeometria = NULL; }
    $this->idgeometria = StripHtml($mData);
  }

  public function setidangulo($mData = NULL) {
    if ($mData === NULL) { $this->idangulo = NULL; }
    $this->idangulo = StripHtml($mData);
  }

  public function setidlongitud($mData = NULL) {
    if ($mData === NULL) { $this->idlongitud = NULL; }
    $this->idlongitud = StripHtml($mData);
  }

  public function setidespesor($mData = NULL) {
    if ($mData === NULL) { $this->idespesor = NULL; }
    $this->idespesor = StripHtml($mData);
  }

  public function setidradio($mData = NULL) {
    if ($mData === NULL) { $this->idradio = NULL; }
    $this->idradio = StripHtml($mData);
  }

  public function setidtipo_corte($mData = NULL) {
    if ($mData === NULL) { $this->idtipo_corte = NULL; }
    $this->idtipo_corte = StripHtml($mData);
  }

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
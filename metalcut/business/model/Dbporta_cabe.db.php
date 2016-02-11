<?php
/*
 * @file               : Dbporta_cabe.db.php
 * @brief              : Clase para la interaccion con la tabla porta_cabe
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_cabe
 * @brief: Clase para la interaccion con la tabla porta_cabe
 */
 
class Dbporta_cabe extends DbDAO {

  protected $idporta_cabe = NULL;
  protected $col1 = NULL;
  protected $col2 = NULL;
  protected $col3 = NULL;
  protected $col4 = NULL;
  protected $col5 = NULL;
  protected $col6 = NULL;
  protected $col7 = NULL;
  protected $col8 = NULL;
  protected $col9 = NULL;
  protected $col10 = NULL;
  protected $orientacion = NULL;
  protected $canridad = NULL;

  public function setidporta_cabe($mData = NULL) {
    if ($mData === NULL) { $this->idporta_cabe = NULL; }
    $this->idporta_cabe = StripHtml($mData);
  }

  public function setcol1($mData = NULL) {
    if ($mData === NULL) { $this->col1 = NULL; }
    $this->col1 = StripHtml($mData);
  }

  public function setcol2($mData = NULL) {
    if ($mData === NULL) { $this->col2 = NULL; }
    $this->col2 = StripHtml($mData);
  }

  public function setcol3($mData = NULL) {
    if ($mData === NULL) { $this->col3 = NULL; }
    $this->col3 = StripHtml($mData);
  }

  public function setcol4($mData = NULL) {
    if ($mData === NULL) { $this->col4 = NULL; }
    $this->col4 = StripHtml($mData);
  }

  public function setcol5($mData = NULL) {
    if ($mData === NULL) { $this->col5 = NULL; }
    $this->col5 = StripHtml($mData);
  }

  public function setcol6($mData = NULL) {
    if ($mData === NULL) { $this->col6 = NULL; }
    $this->col6 = StripHtml($mData);
  }

  public function setcol7($mData = NULL) {
    if ($mData === NULL) { $this->col7 = NULL; }
    $this->col7 = StripHtml($mData);
  }

  public function setcol8($mData = NULL) {
    if ($mData === NULL) { $this->col8 = NULL; }
    $this->col8 = StripHtml($mData);
  }

  public function setcol9($mData = NULL) {
    if ($mData === NULL) { $this->col9 = NULL; }
    $this->col9 = StripHtml($mData);
  }

  public function setcol10($mData = NULL) {
    if ($mData === NULL) { $this->col10 = NULL; }
    $this->col10 = StripHtml($mData);
  }

  public function setorientacion($mData = NULL) {
    if ($mData === NULL) { $this->orientacion = NULL; }
    $this->orientacion = StripHtml($mData);
  }

  public function setcanridad($mData = NULL) {
    if ($mData === NULL) { $this->canridad = NULL; }
    $this->canridad = StripHtml($mData);
  }

}
?>
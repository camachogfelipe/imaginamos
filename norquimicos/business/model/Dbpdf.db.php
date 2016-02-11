<?php
/*
 * @file               : Dbpdf.db.php
 * @brief              : Clase para la interaccion con la tabla pdf
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbpdf
 * @brief: Clase para la interaccion con la tabla pdf
 */
 
class Dbpdf extends DbDAO {

  public $id = NULL;
  protected $pdf = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setpdf($mData = NULL) {
    if ($mData === NULL) { $this->pdf = NULL; }
    $this->pdf = StripHtml($mData);
  }

}
?>
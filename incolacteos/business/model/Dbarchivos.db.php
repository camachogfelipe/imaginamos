<?php
/*
 * @file               : Dbarchivos.db.php
 * @brief              : Clase para la interaccion con la tabla archivos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbarchivos
 * @brief: Clase para la interaccion con la tabla archivos
 */
 
class Dbarchivos extends DbDAO {

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
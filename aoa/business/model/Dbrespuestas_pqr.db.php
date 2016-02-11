<?php
/*
 * @file               : Dbrespuestas_pqr.db.php
 * @brief              : Clase para la interaccion con la tabla respuestas_pqr
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbrespuestas_pqr
 * @brief: Clase para la interaccion con la tabla respuestas_pqr
 */
 
class Dbrespuestas_pqr extends DbDAO {

  public $id = NULL;
  protected $pqr_registro_id = NULL;
  protected $texto = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setpqr_registro_id($mData = NULL) {
    if ($mData === NULL) { $this->pqr_registro_id = NULL; }
    $this->pqr_registro_id = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
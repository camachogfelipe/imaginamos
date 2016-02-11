<?php
/*
 * @file               : Dbcaracteristicas_sirius.db.php
 * @brief              : Clase para la interaccion con la tabla caracteristicas_sirius
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcaracteristicas_sirius
 * @brief: Clase para la interaccion con la tabla caracteristicas_sirius
 */
 
class Dbcaracteristicas_sirius extends DbDAO {

  protected $idcaracteristicas_sirius = NULL;
  protected $texto = NULL;

  public function setidcaracteristicas_sirius($mData = NULL) {
    if ($mData === NULL) { $this->idcaracteristicas_sirius = NULL; }
    $this->idcaracteristicas_sirius = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
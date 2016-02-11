<?php
/*
 * @file               : Dbventajas_sirius.db.php
 * @brief              : Clase para la interaccion con la tabla ventajas_sirius
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbventajas_sirius
 * @brief: Clase para la interaccion con la tabla ventajas_sirius
 */
 
class Dbventajas_sirius extends DbDAO {

  protected $idventajas_sirius = NULL;
  protected $texto = NULL;

  public function setidventajas_sirius($mData = NULL) {
    if ($mData === NULL) { $this->idventajas_sirius = NULL; }
    $this->idventajas_sirius = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
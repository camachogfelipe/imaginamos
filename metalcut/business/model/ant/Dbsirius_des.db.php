<?php
/*
 * @file               : Dbsirius_des.db.php
 * @brief              : Clase para la interaccion con la tabla sirius_des
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbsirius_des
 * @brief: Clase para la interaccion con la tabla sirius_des
 */
 
class Dbsirius_des extends DbDAO {

  protected $idsirius_des = NULL;
  protected $texto = NULL;

  public function setidsirius_des($mData = NULL) {
    if ($mData === NULL) { $this->idsirius_des = NULL; }
    $this->idsirius_des = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
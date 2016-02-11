<?php
/*
 * @file               : Dbano.db.php
 * @brief              : Clase para la interaccion con la tabla ano
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbano
 * @brief: Clase para la interaccion con la tabla ano
 */
 
class Dbano extends DbDAO {

  protected $idano = NULL;
  protected $ano = NULL;

  public function setidano($mData = NULL) {
    if ($mData === NULL) { $this->idano = NULL; }
    $this->idano = StripHtml($mData);
  }

  public function setano($mData = NULL) {
    if ($mData === NULL) { $this->ano = NULL; }
    $this->ano = StripHtml($mData);
  }

}
?>
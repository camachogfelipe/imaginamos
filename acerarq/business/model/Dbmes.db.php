<?php
/*
 * @file               : Dbmes.db.php
 * @brief              : Clase para la interaccion con la tabla mes
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbmes
 * @brief: Clase para la interaccion con la tabla mes
 */
 
class Dbmes extends DbDAO {

  protected $idmes = NULL;
  protected $nombre = NULL;

  public function setidmes($mData = NULL) {
    if ($mData === NULL) { $this->idmes = NULL; }
    $this->idmes = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

}
?>
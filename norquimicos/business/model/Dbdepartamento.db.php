<?php
/*
 * @file               : Dbdepartamento.db.php
 * @brief              : Clase para la interaccion con la tabla departamento
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbdepartamento
 * @brief: Clase para la interaccion con la tabla departamento
 */
 
class Dbdepartamento extends DbDAO {

  protected $idDepartamento = NULL;
  protected $nombre = NULL;

  public function setidDepartamento($mData = NULL) {
    if ($mData === NULL) { $this->idDepartamento = NULL; }
    $this->idDepartamento = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

}
?>
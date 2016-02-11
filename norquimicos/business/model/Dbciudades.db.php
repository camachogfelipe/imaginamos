<?php
/*
 * @file               : Dbciudades.db.php
 * @brief              : Clase para la interaccion con la tabla ciudades
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbciudades
 * @brief: Clase para la interaccion con la tabla ciudades
 */
 
class Dbciudades extends DbDAO {

  protected $idCiudad = NULL;
  protected $nombre = NULL;
  protected $idDepartamento = NULL;

  public function setidCiudad($mData = NULL) {
    if ($mData === NULL) { $this->idCiudad = NULL; }
    $this->idCiudad = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setidDepartamento($mData = NULL) {
    if ($mData === NULL) { $this->idDepartamento = NULL; }
    $this->idDepartamento = StripHtml($mData);
  }

}
?>
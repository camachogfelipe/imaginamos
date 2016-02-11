<?php
/*
 * @file               : Dbinscripcion.db.php
 * @brief              : Clase para la interaccion con la tabla inscripcion
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbinscripcion
 * @brief: Clase para la interaccion con la tabla inscripcion
 */
 
class Dbinscripcion extends DbDAO {

  public $id = NULL;
  protected $correo = NULL;
  protected $bandera = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

  public function setbandera($mData = NULL) {
    if ($mData === NULL) { $this->bandera = NULL; }
    $this->bandera = StripHtml($mData);
  }

}
?>
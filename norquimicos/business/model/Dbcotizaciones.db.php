<?php
/*
 * @file               : Dbcotizaciones.db.php
 * @brief              : Clase para la interaccion con la tabla cotizaciones
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcotizaciones
 * @brief: Clase para la interaccion con la tabla cotizaciones
 */
 
class Dbcotizaciones extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $institucion = NULL;
  protected $email = NULL;
  protected $direccion = NULL;
  protected $telefono = NULL;
  protected $celular = NULL;
  protected $ubicacion = NULL;
  protected $estado = NULL;
  protected $consulta_final_id = NULL;
  protected $consulta_final_consulta_final_id = NULL;
  protected $consulta_final_contizaciones_id = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setinstitucion($mData = NULL) {
    if ($mData === NULL) { $this->institucion = NULL; }
    $this->institucion = StripHtml($mData);
  }

  public function setemail($mData = NULL) {
    if ($mData === NULL) { $this->email = NULL; }
    $this->email = StripHtml($mData);
  }

  public function setdireccion($mData = NULL) {
    if ($mData === NULL) { $this->direccion = NULL; }
    $this->direccion = StripHtml($mData);
  }

  public function settelefono($mData = NULL) {
    if ($mData === NULL) { $this->telefono = NULL; }
    $this->telefono = StripHtml($mData);
  }

  public function setcelular($mData = NULL) {
    if ($mData === NULL) { $this->celular = NULL; }
    $this->celular = StripHtml($mData);
  }

  public function setubicacion($mData = NULL) {
    if ($mData === NULL) { $this->ubicacion = NULL; }
    $this->ubicacion = StripHtml($mData);
  }

  public function setestado($mData = NULL) {
    if ($mData === NULL) { $this->estado = NULL; }
    $this->estado = StripHtml($mData);
  }

  public function setconsulta_final_id($mData = NULL) {
    if ($mData === NULL) { $this->consulta_final_id = NULL; }
    $this->consulta_final_id = StripHtml($mData);
  }

  public function setconsulta_final_consulta_final_id($mData = NULL) {
    if ($mData === NULL) { $this->consulta_final_consulta_final_id = NULL; }
    $this->consulta_final_consulta_final_id = StripHtml($mData);
  }

  public function setconsulta_final_contizaciones_id($mData = NULL) {
    if ($mData === NULL) { $this->consulta_final_contizaciones_id = NULL; }
    $this->consulta_final_contizaciones_id = StripHtml($mData);
  }

}
?>
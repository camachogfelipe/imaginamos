<?php
/*
 * @file               : Dbpqr_registro.db.php
 * @brief              : Clase para la interaccion con la tabla pqr_registro
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbpqr_registro
 * @brief: Clase para la interaccion con la tabla pqr_registro
 */
 
class Dbpqr_registro extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $cedula = NULL;
  protected $direccion = NULL;
  protected $email = NULL;
  protected $placa = NULL;
  protected $aseguradora = NULL;
  protected $tipo_de_solicitud = NULL;
  protected $comentarios_texto = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setcedula($mData = NULL) {
    if ($mData === NULL) { $this->cedula = NULL; }
    $this->cedula = StripHtml($mData);
  }

  public function setdireccion($mData = NULL) {
    if ($mData === NULL) { $this->direccion = NULL; }
    $this->direccion = StripHtml($mData);
  }

  public function setemail($mData = NULL) {
    if ($mData === NULL) { $this->email = NULL; }
    $this->email = StripHtml($mData);
  }

  public function setplaca($mData = NULL) {
    if ($mData === NULL) { $this->placa = NULL; }
    $this->placa = StripHtml($mData);
  }

  public function setaseguradora($mData = NULL) {
    if ($mData === NULL) { $this->aseguradora = NULL; }
    $this->aseguradora = StripHtml($mData);
  }

  public function settipo_de_solicitud($mData = NULL) {
    if ($mData === NULL) { $this->tipo_de_solicitud = NULL; }
    $this->tipo_de_solicitud = StripHtml($mData);
  }

  public function setcomentarios_texto($mData = NULL) {
    if ($mData === NULL) { $this->comentarios_texto = NULL; }
    $this->comentarios_texto = StripHtml($mData);
  }

}
?>
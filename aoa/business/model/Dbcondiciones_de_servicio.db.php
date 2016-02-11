<?php
/*
 * @file               : Dbcondiciones_de_servicio.db.php
 * @brief              : Clase para la interaccion con la tabla condiciones_de_servicio
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbcondiciones_de_servicio
 * @brief: Clase para la interaccion con la tabla condiciones_de_servicio
 */
 
class Dbcondiciones_de_servicio extends DbDAO {

  public $id = NULL;
  protected $aseguradoras_id = NULL;
  protected $titulo = NULL;
  protected $texto_descriptivo = NULL;
  protected $datos_de_contacto_1 = NULL;
  protected $datos_de_contacto_2 = NULL;
  protected $texto_documentacion_requerida = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setaseguradoras_id($mData = NULL) {
    if ($mData === NULL) { $this->aseguradoras_id = NULL; }
    $this->aseguradoras_id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto_descriptivo($mData = NULL) {
    if ($mData === NULL) { $this->texto_descriptivo = NULL; }
    $this->texto_descriptivo = StripHtml($mData);
  }

  public function setdatos_de_contacto_1($mData = NULL) {
    if ($mData === NULL) { $this->datos_de_contacto_1 = NULL; }
    $this->datos_de_contacto_1 = StripHtml($mData);
  }

  public function setdatos_de_contacto_2($mData = NULL) {
    if ($mData === NULL) { $this->datos_de_contacto_2 = NULL; }
    $this->datos_de_contacto_2 = StripHtml($mData);
  }

  public function settexto_documentacion_requerida($mData = NULL) {
    if ($mData === NULL) { $this->texto_documentacion_requerida = NULL; }
    $this->texto_documentacion_requerida = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbzona_personas_eduformal.db.php
 * @brief              : Clase para la interaccion con la tabla zona_personas_eduformal
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_personas_eduformal
 * @brief: Clase para la interaccion con la tabla zona_personas_eduformal
 */

class Dbzona_personas_eduformal extends DbDAO {

  public $id = NULL;
  protected $id_persona = NULL;
  protected $id_nivel_estudio = NULL;
  protected $txt_titulo = NULL;
  protected $txt_institucion = NULL;
  protected $fec_ingreso = NULL;
  protected $ind_encurso = NULL;
  protected $fec_finaliza = NULL;
  protected $id_departamento = NULL;
  protected $id_ciudad = NULL;
  protected $ind_estado = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_persona($mData = NULL) {
    if ($mData === NULL) { $this->id_persona = NULL; }
    $this->id_persona = StripHtml($mData);
  }

  public function setid_nivel_estudio($mData = NULL) {
    if ($mData === NULL) { $this->id_nivel_estudio = NULL; }
    $this->id_nivel_estudio = StripHtml($mData);
  }

  public function settxt_titulo($mData = NULL) {
    if ($mData === NULL) { $this->txt_titulo = NULL; }
    $this->txt_titulo = StripHtml($mData);
  }

  public function settxt_institucion($mData = NULL) {
    if ($mData === NULL) { $this->txt_institucion = NULL; }
    $this->txt_institucion = StripHtml($mData);
  }
  
  public function setfec_ingreso($mData = NULL) {
    if ($mData === NULL) { $this->fec_ingreso = NULL; }
    $this->fec_ingreso = StripHtml($mData);
  }

  public function setind_encurso($mData = NULL) {
    if ($mData === NULL) { $this->ind_encurso = NULL; }
    $this->ind_encurso = StripHtml($mData);
  }

  public function setfec_finaliza($mData = NULL) {
    if ($mData === NULL) { $this->fec_finaliza = NULL; }
    $this->fec_finaliza = StripHtml($mData);
  }

  public function setid_departamento($mData = NULL) {
    if ($mData === NULL) { $this->id_departamento = NULL; }
    $this->id_departamento = StripHtml($mData);
  }

  public function setid_ciudad($mData = NULL) {
    if ($mData === NULL) { $this->id_ciudad = NULL; }
    $this->id_ciudad = StripHtml($mData);
  }

  public function setind_estado($mData = NULL) {
    if ($mData === NULL) { $this->ind_estado = NULL; }
    $this->ind_estado = StripHtml($mData);
  }

}
?>
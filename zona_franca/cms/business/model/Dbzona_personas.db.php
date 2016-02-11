<?php
/*
 * @file               : Dbzona_personas.db.php
 * @brief              : Clase para la interaccion con la tabla zona_personas
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-16
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_personas
 * @brief: Clase para la interaccion con la tabla zona_personas
 */

class Dbzona_personas extends DbDAO {

  public $id = NULL;
  protected $id_registrado = NULL;
  protected $num_identifica = NULL;
  protected $txt_prim_nom = NULL;
  protected $txt_seg_nom = NULL;
  protected $txt_prim_apell = NULL;
  protected $txt_seg_apell = NULL;
  protected $id_genero = NULL;
  protected $fec_nacimiento = NULL;
  protected $id_estado_civ = NULL;
  protected $id_departamento = NULL;
  protected $id_ciudad = NULL;
  protected $txt_barrio = NULL;
  protected $txt_telefono = NULL;
  protected $txt_movil = NULL;
  protected $id_poblacion = NULL;
  protected $ind_estado = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_registrado($mData = NULL) {
    if ($mData === NULL) { $this->id_registrado = NULL; }
    $this->id_registrado = StripHtml($mData);
  }

  public function setnum_identifica($mData = NULL) {
    if ($mData === NULL) { $this->num_identifica = NULL; }
    $this->num_identifica = StripHtml($mData);
  }

  public function settxt_prim_nom($mData = NULL) {
    if ($mData === NULL) { $this->txt_prim_nom = NULL; }
    $this->txt_prim_nom = StripHtml($mData);
  }

  public function settxt_seg_nom($mData = NULL) {
    if ($mData === NULL) { $this->txt_seg_nom = NULL; }
    $this->txt_seg_nom = StripHtml($mData);
  }

  public function settxt_prim_apell($mData = NULL) {
    if ($mData === NULL) { $this->txt_prim_apell = NULL; }
    $this->txt_prim_apell = StripHtml($mData);
  }

  public function settxt_seg_apell($mData = NULL) {
    if ($mData === NULL) { $this->txt_seg_apell = NULL; }
    $this->txt_seg_apell = StripHtml($mData);
  }

  public function setid_genero($mData = NULL) {
    if ($mData === NULL) { $this->id_genero = NULL; }
    $this->id_genero = StripHtml($mData);
  }

  public function setfec_nacimiento($mData = NULL) {
    if ($mData === NULL) { $this->fec_nacimiento = NULL; }
    $this->fec_nacimiento = StripHtml($mData);
  }

  public function setid_estado_civ($mData = NULL) {
    if ($mData === NULL) { $this->id_estado_civ = NULL; }
    $this->id_estado_civ = StripHtml($mData);
  }

  public function setid_departamento($mData = NULL) {
    if ($mData === NULL) { $this->id_departamento = NULL; }
    $this->id_departamento = StripHtml($mData);
  }

  public function setid_ciudad($mData = NULL) {
    if ($mData === NULL) { $this->id_ciudad = NULL; }
    $this->id_ciudad = StripHtml($mData);
  }

  public function settxt_barrio($mData = NULL) {
    if ($mData === NULL) { $this->txt_barrio = NULL; }
    $this->txt_barrio = StripHtml($mData);
  }

  public function settxt_telefono($mData = NULL) {
    if ($mData === NULL) { $this->txt_telefono = NULL; }
    $this->txt_telefono = StripHtml($mData);
  }

  public function settxt_movil($mData = NULL) {
    if ($mData === NULL) { $this->txt_movil = NULL; }
    $this->txt_movil = StripHtml($mData);
  }

  public function setid_poblacion($mData = NULL) {
    if ($mData === NULL) { $this->id_poblacion = NULL; }
    $this->id_poblacion = StripHtml($mData);
  }

  public function setind_estado($mData = NULL) {
    if ($mData === NULL) { $this->ind_estado = NULL; }
    $this->ind_estado = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
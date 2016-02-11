<?php
/*
 * @file               : Dbzona_personas_perfil.db.php
 * @brief              : Clase para la interaccion con la tabla zona_personas_perfil
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_personas_perfil
 * @brief: Clase para la interaccion con la tabla zona_personas_perfil
 */

class Dbzona_personas_perfil extends DbDAO {

  public $id = NULL;
  protected $id_persona = NULL;
  protected $id_profesion = NULL;
  protected $ind_trabajando = NULL;
  protected $id_aspiracion = NULL;
  protected $txt_tipotrabajo = NULL;
  protected $txt_perfil = NULL;
  protected $txt_habilidades = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_persona($mData = NULL) {
    if ($mData === NULL) { $this->id_persona = NULL; }
    $this->id_persona = StripHtml($mData);
  }

  public function setid_profesion($mData = NULL) {
    if ($mData === NULL) { $this->id_profesion = NULL; }
    $this->id_profesion = StripHtml($mData);
  }

  public function setind_trabajando($mData = NULL) {
    if ($mData === NULL) { $this->ind_trabajando = NULL; }
    $this->ind_trabajando = StripHtml($mData);
  }

  public function setid_aspiracion($mData = NULL) {
    if ($mData === NULL) { $this->id_aspiracion = NULL; }
    $this->id_aspiracion = StripHtml($mData);
  }

  public function settxt_tipotrabajo($mData = NULL) {
    if ($mData === NULL) { $this->txt_tipotrabajo = NULL; }
    $this->txt_tipotrabajo = StripHtml($mData);
  }

  public function settxt_perfil($mData = NULL) {
    if ($mData === NULL) { $this->txt_perfil = NULL; }
    $this->txt_perfil = StripHtml($mData);
  }

  public function settxt_habilidades($mData = NULL) {
    if ($mData === NULL) { $this->txt_habilidades = NULL; }
    $this->txt_habilidades = StripHtml($mData);
  }

}
?>
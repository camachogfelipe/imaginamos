<?php
/*
 * @file               : Dbzona_personas_informatica.db.php
 * @brief              : Clase para la interaccion con la tabla zona_personas_informatica
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_personas_informatica
 * @brief: Clase para la interaccion con la tabla zona_personas_informatica
 */

class Dbzona_personas_informatica extends DbDAO {

  public $id = NULL;
  protected $id_persona = NULL;
  protected $txt_aplicacion = NULL;
  protected $id_dominio = NULL;
  protected $ind_estado = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_persona($mData = NULL) {
    if ($mData === NULL) { $this->id_persona = NULL; }
    $this->id_persona = StripHtml($mData);
  }

  public function settxt_aplicacion($mData = NULL) {
    if ($mData === NULL) { $this->txt_aplicacion = NULL; }
    $this->txt_aplicacion = StripHtml($mData);
  }

  public function setid_dominio($mData = NULL) {
    if ($mData === NULL) { $this->id_dominio = NULL; }
    $this->id_dominio = StripHtml($mData);
  }

  public function setind_estado($mData = NULL) {
    if ($mData === NULL) { $this->ind_estado = NULL; }
    $this->ind_estado = StripHtml($mData);
  }

}
?>
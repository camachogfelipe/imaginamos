<?php
/*
 * @file               : Dbzona_personas_idiomas.db.php
 * @brief              : Clase para la interaccion con la tabla zona_personas_idiomas
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_personas_idiomas
 * @brief: Clase para la interaccion con la tabla zona_personas_idiomas
 */

class Dbzona_personas_idiomas extends DbDAO {

  public $id = NULL;
  protected $id_persona = NULL;
  protected $id_idioma = NULL;
  protected $txt_cual = NULL;
  protected $id_habla = NULL;
  protected $id_escritura = NULL;
  protected $id_lectura = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_persona($mData = NULL) {
    if ($mData === NULL) { $this->id_persona = NULL; }
    $this->id_persona = StripHtml($mData);
  }

  public function setid_idioma($mData = NULL) {
    if ($mData === NULL) { $this->id_idioma = NULL; }
    $this->id_idioma = StripHtml($mData);
  }

  public function settxt_cual($mData = NULL) {
    if ($mData === NULL) { $this->txt_cual = NULL; }
    $this->txt_cual = StripHtml($mData);
  }

  public function setid_habla($mData = NULL) {
    if ($mData === NULL) { $this->id_habla = NULL; }
    $this->id_habla = StripHtml($mData);
  }

  public function setid_escritura($mData = NULL) {
    if ($mData === NULL) { $this->id_escritura = NULL; }
    $this->id_escritura = StripHtml($mData);
  }

  public function setid_lectura($mData = NULL) {
    if ($mData === NULL) { $this->id_lectura = NULL; }
    $this->id_lectura = StripHtml($mData);
  }

}
?>
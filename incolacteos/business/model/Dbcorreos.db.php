<?php
/*
 * @file               : Dbcorreos.db.php
 * @brief              : Clase para la interaccion con la tabla correos
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcorreos
 * @brief: Clase para la interaccion con la tabla correos
 */
 
class Dbcorreos extends DbDAO {

  public $id = NULL;
  protected $peticion = NULL;
  protected $queja = NULL;
  protected $recurso = NULL;
  protected $otro = NULL;
  protected $contactenos = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setpeticion($mData = NULL) {
    if ($mData === NULL) { $this->peticion = NULL; }
    $this->peticion = StripHtml($mData);
  }

  public function setqueja($mData = NULL) {
    if ($mData === NULL) { $this->queja = NULL; }
    $this->queja = StripHtml($mData);
  }

  public function setrecurso($mData = NULL) {
    if ($mData === NULL) { $this->recurso = NULL; }
    $this->recurso = StripHtml($mData);
  }

  public function setotro($mData = NULL) {
    if ($mData === NULL) { $this->otro = NULL; }
    $this->otro = StripHtml($mData);
  }

  public function setcontactenos($mData = NULL) {
    if ($mData === NULL) { $this->contactenos = NULL; }
    $this->contactenos = StripHtml($mData);
  }

}
?>
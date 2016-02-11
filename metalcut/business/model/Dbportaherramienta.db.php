<?php
/*
 * @file               : Dbportaherramienta.db.php
 * @brief              : Clase para la interaccion con la tabla portaherramienta
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbportaherramienta
 * @brief: Clase para la interaccion con la tabla portaherramienta
 */
 
class Dbportaherramienta extends DbDAO {

  protected $idportaherramienta = NULL;
  protected $modulo = NULL;
  protected $idmodulo = NULL;
  protected $nom_columna = NULL;

  public function setidportaherramienta($mData = NULL) {
    if ($mData === NULL) { $this->idportaherramienta = NULL; }
    $this->idportaherramienta = StripHtml($mData);
  }

  public function setmodulo($mData = NULL) {
    if ($mData === NULL) { $this->modulo = NULL; }
    $this->modulo = StripHtml($mData);
  }

  public function setidmodulo($mData = NULL) {
    if ($mData === NULL) { $this->idmodulo = NULL; }
    $this->idmodulo = StripHtml($mData);
  }

  public function setnom_columna($mData = NULL) {
    if ($mData === NULL) { $this->nom_columna = NULL; }
    $this->nom_columna = StripHtml($mData);
  }

}
?>
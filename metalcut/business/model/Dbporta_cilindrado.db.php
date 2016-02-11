<?php
/*
 * @file               : Dbporta_cilindrado.db.php
 * @brief              : Clase para la interaccion con la tabla porta_cilindrado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbporta_cilindrado
 * @brief: Clase para la interaccion con la tabla porta_cilindrado
 */
 
class Dbporta_cilindrado extends DbDAO {

  protected $idporta_cilindrado = NULL;
  protected $idcilindrado = NULL;
  protected $ref = NULL;
  protected $tamano = NULL;
  protected $longitud = NULL;
  protected $valor = NULL;

  public function setidporta_cilindrado($mData = NULL) {
    if ($mData === NULL) { $this->idporta_cilindrado = NULL; }
    $this->idporta_cilindrado = StripHtml($mData);
  }

  public function setidcilindrado($mData = NULL) {
    if ($mData === NULL) { $this->idcilindrado = NULL; }
    $this->idcilindrado = StripHtml($mData);
  }

  public function setref($mData = NULL) {
    if ($mData === NULL) { $this->ref = NULL; }
    $this->ref = StripHtml($mData);
  }

  public function settamano($mData = NULL) {
    if ($mData === NULL) { $this->tamano = NULL; }
    $this->tamano = StripHtml($mData);
  }

  public function setlongitud($mData = NULL) {
    if ($mData === NULL) { $this->longitud = NULL; }
    $this->longitud = StripHtml($mData);
  }

  public function setvalor($mData = NULL) {
    if ($mData === NULL) { $this->valor = NULL; }
    $this->valor = StripHtml($mData);
  }

}
?>
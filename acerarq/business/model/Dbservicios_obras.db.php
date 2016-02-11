<?php
/*
 * @file               : Dbservicios_obras.db.php
 * @brief              : Clase para la interaccion con la tabla servicios_obras
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbservicios_obras
 * @brief: Clase para la interaccion con la tabla servicios_obras
 */
 
class Dbservicios_obras extends DbDAO {

  protected $idservicios_obras = NULL;
  protected $idsubcategoria_obras = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;

  public function setidservicios_obras($mData = NULL) {
    if ($mData === NULL) { $this->idservicios_obras = NULL; }
    $this->idservicios_obras = StripHtml($mData);
  }

  public function setidsubcategoria_obras($mData = NULL) {
    if ($mData === NULL) { $this->idsubcategoria_obras = NULL; }
    $this->idsubcategoria_obras = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

}
?>
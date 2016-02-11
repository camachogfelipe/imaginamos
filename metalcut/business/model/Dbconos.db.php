<?php
/*
 * @file               : Dbconos.db.php
 * @brief              : Clase para la interaccion con la tabla conos
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbconos
 * @brief: Clase para la interaccion con la tabla conos
 */
 
class Dbconos extends DbDAO {

  protected $idconos = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidconos($mData = NULL) {
    if ($mData === NULL) { $this->idconos = NULL; }
    $this->idconos = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
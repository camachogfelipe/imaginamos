<?php
/*
 * @file               : Dbhistoria.db.php
 * @brief              : Clase para la interaccion con la tabla historia
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbhistoria
 * @brief: Clase para la interaccion con la tabla historia
 */
 
class Dbhistoria extends DbDAO {

  protected $idhistoria = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidhistoria($mData = NULL) {
    if ($mData === NULL) { $this->idhistoria = NULL; }
    $this->idhistoria = StripHtml($mData);
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
<?php
/*
 * @file               : Dbvalores.db.php
 * @brief              : Clase para la interaccion con la tabla valores
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbvalores
 * @brief: Clase para la interaccion con la tabla valores
 */
 
class Dbvalores extends DbDAO {

  protected $idvalores = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;

  public function setidvalores($mData = NULL) {
    if ($mData === NULL) { $this->idvalores = NULL; }
    $this->idvalores = StripHtml($mData);
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
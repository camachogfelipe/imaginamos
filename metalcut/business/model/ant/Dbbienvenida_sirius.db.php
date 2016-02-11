<?php
/*
 * @file               : Dbbienvenida_sirius.db.php
 * @brief              : Clase para la interaccion con la tabla bienvenida_sirius
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbienvenida_sirius
 * @brief: Clase para la interaccion con la tabla bienvenida_sirius
 */
 
class Dbbienvenida_sirius extends DbDAO {

  protected $idbienvenida_sirius = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;

  public function setidbienvenida_sirius($mData = NULL) {
    if ($mData === NULL) { $this->idbienvenida_sirius = NULL; }
    $this->idbienvenida_sirius = StripHtml($mData);
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
<?php
/*
 * @file               : Dbbienvenida.db.php
 * @brief              : Clase para la interaccion con la tabla bienvenida
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbbienvenida
 * @brief: Clase para la interaccion con la tabla bienvenida
 */
 
class Dbbienvenida extends DbDAO {

  protected $idbienvenida = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;

  public function setidbienvenida($mData = NULL) {
    if ($mData === NULL) { $this->idbienvenida = NULL; }
    $this->idbienvenida = StripHtml($mData);
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
<?php

/*
 * @file               : DbBase.db.php
 * @brief              : Clase para la interaccion con la tabla Base
 * @version            : 3.2
 * @ultima_modificacion: 04-jun-2012
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO v -> 1.0
 *
 * @class: DbBase
 * @brief: Clase para la interaccion con la tabla Base
 */

class Dbbase extends DbDAO {

  protected $id = NULL;
  protected $nombre = NULL;
  protected $f_reg = NULL;

  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase
   * @fn __construct
   * @brief Inicializa variables necesarias de la clase
   */
  public function __construct() {
    $this->f_reg = date("Y-m-d H:i:s");
  }

  public function setid($mData = NULL) {
    if ($mData === NULL) {
      $this->id = NULL;
    }
    $this->id = (int) $mData;
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) {
      return FALSE;
    }
    $this->nombre = StripHtml($mData);
  }

  public function setf_reg($mData = NULL) {
    if ($mData === NULL) {
      return FALSE;
    }
    $this->f_reg = StripHtml($mData);
  }

}

?>
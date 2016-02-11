<?php
/*
 * @file               : Dbtipo_corte.db.php
 * @brief              : Clase para la interaccion con la tabla tipo_corte
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbtipo_corte
 * @brief: Clase para la interaccion con la tabla tipo_corte
 */
 
class Dbtipo_corte extends DbDAO {

  protected $idtipo_corte = NULL;
  protected $imagen = NULL;

  public function setidtipo_corte($mData = NULL) {
    if ($mData === NULL) { $this->idtipo_corte = NULL; }
    $this->idtipo_corte = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
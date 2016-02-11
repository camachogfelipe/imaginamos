<?php
/*
 * @file               : Dbgeometria.db.php
 * @brief              : Clase para la interaccion con la tabla geometria
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbgeometria
 * @brief: Clase para la interaccion con la tabla geometria
 */
 
class Dbgeometria extends DbDAO {

  protected $idgeometria = NULL;
  protected $imagen = NULL;

  public function setidgeometria($mData = NULL) {
    if ($mData === NULL) { $this->idgeometria = NULL; }
    $this->idgeometria = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
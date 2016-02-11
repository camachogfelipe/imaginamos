<?php
/*
 * @file               : Dbimagen_contactenos.db.php
 * @brief              : Clase para la interaccion con la tabla imagen_contactenos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbimagen_contactenos
 * @brief: Clase para la interaccion con la tabla imagen_contactenos
 */
 
class Dbimagen_contactenos extends DbDAO {

  protected $idimagen = NULL;
  protected $imagen = NULL;

  public function setidimagen($mData = NULL) {
    if ($mData === NULL) { $this->idimagen = NULL; }
    $this->idimagen = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

}
?>
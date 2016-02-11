<?php
/*
 * @file               : Dblink_herramientas.db.php
 * @brief              : Clase para la interaccion con la tabla link_herramientas
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dblink_herramientas
 * @brief: Clase para la interaccion con la tabla link_herramientas
 */
 
class Dblink_herramientas extends DbDAO {

  protected $idlink = NULL;
  protected $link = NULL;
  protected $fecha_creacion = NULL;
  protected $fecha_modificacion = NULL;

  public function setidlink($mData = NULL) {
    if ($mData === NULL) { $this->idlink = NULL; }
    $this->idlink = StripHtml($mData);
  }

  public function setlink($mData = NULL) {
    if ($mData === NULL) { $this->link = NULL; }
    $this->link = StripHtml($mData);
  }

  public function setfecha_creacion($mData = NULL) {
    if ($mData === NULL) { $this->fecha_creacion = NULL; }
    $this->fecha_creacion = StripHtml($mData);
  }

  public function setfecha_modificacion($mData = NULL) {
    if ($mData === NULL) { $this->fecha_modificacion = NULL; }
    $this->fecha_modificacion = StripHtml($mData);
  }

}
?>
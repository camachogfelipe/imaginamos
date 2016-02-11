<?php
/*
 * @file               : Dbtransmision.db.php
 * @brief              : Clase para la interaccion con la tabla transmision
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbtransmision
 * @brief: Clase para la interaccion con la tabla transmision
 */
 
class Dbtransmision extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $video = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setvideo($mData = NULL) {
    if ($mData === NULL) { $this->video = NULL; }
    $this->video = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbaudio.db.php
 * @brief              : Clase para la interaccion con la tabla audio
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbaudio
 * @brief: Clase para la interaccion con la tabla audio
 */
 
class Dbaudio extends DbDAO {

  public $id = NULL;
  protected $audio = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setaudio($mData = NULL) {
    if ($mData === NULL) { $this->audio = NULL; }
    $this->audio = StripHtml($mData);
  }

}
?>
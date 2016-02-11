<?php
/*
 * @file               : Dbmensaje_audios.db.php
 * @brief              : Clase para la interaccion con la tabla mensaje_audios
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbmensaje_audios
 * @brief: Clase para la interaccion con la tabla mensaje_audios
 */
 
class Dbmensaje_audios extends DbDAO {

  public $id = NULL;
  protected $id_mensaje = NULL;
  protected $audio = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_mensaje($mData = NULL) {
    if ($mData === NULL) { $this->id_mensaje = NULL; }
    $this->id_mensaje = StripHtml($mData);
  }

  public function setaudio($mData = NULL) {
    if ($mData === NULL) { $this->audio = NULL; }
    $this->audio = StripHtml($mData);
  }

}
?>
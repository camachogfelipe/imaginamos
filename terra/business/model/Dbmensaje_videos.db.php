<?php
/*
 * @file               : Dbmensaje_videos.db.php
 * @brief              : Clase para la interaccion con la tabla mensaje_videos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbmensaje_videos
 * @brief: Clase para la interaccion con la tabla mensaje_videos
 */
 
class Dbmensaje_videos extends DbDAO {

  protected $di = NULL;
  protected $id_mensaje = NULL;
  protected $video = NULL;

  public function setdi($mData = NULL) {
    if ($mData === NULL) { $this->di = NULL; }
    $this->di = StripHtml($mData);
  }

  public function setid_mensaje($mData = NULL) {
    if ($mData === NULL) { $this->id_mensaje = NULL; }
    $this->id_mensaje = StripHtml($mData);
  }

  public function setvideo($mData = NULL) {
    if ($mData === NULL) { $this->video = NULL; }
    $this->video = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbform_news.db.php
 * @brief              : Clase para la interaccion con la tabla form_news
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbform_news
 * @brief: Clase para la interaccion con la tabla form_news
 */
 
class Dbform_news extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $correo = NULL;
  protected $suscripcion = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

  public function setsuscripcion($mData = NULL) {
    if ($mData === NULL) { $this->suscripcion = NULL; }
    $this->suscripcion = StripHtml($mData);
  }

}
?>
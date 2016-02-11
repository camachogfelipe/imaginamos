<?php
/*
 * @file               : Dbsubscribe.db.php
 * @brief              : Clase para la interaccion con la tabla subscribe
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbsubscribe
 * @brief: Clase para la interaccion con la tabla subscribe
 */
 
class Dbsubscribe extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $email = NULL;
  protected $blog = NULL;
  protected $trailers = NULL;
  protected $industry = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setemail($mData = NULL) {
    if ($mData === NULL) { $this->email = NULL; }
    $this->email = StripHtml($mData);
  }

  public function setblog($mData = NULL) {
    if ($mData === NULL) { $this->blog = NULL; }
    $this->blog = StripHtml($mData);
  }

  public function settrailers($mData = NULL) {
    if ($mData === NULL) { $this->trailers = NULL; }
    $this->trailers = StripHtml($mData);
  }

  public function setindustry($mData = NULL) {
    if ($mData === NULL) { $this->industry = NULL; }
    $this->industry = StripHtml($mData);
  }

}
?>
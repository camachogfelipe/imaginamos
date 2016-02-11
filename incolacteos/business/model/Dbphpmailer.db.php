<?php
/*
 * @file               : Dbphpmailer.db.php
 * @brief              : Clase para la interaccion con la tabla phpmailer
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbphpmailer
 * @brief: Clase para la interaccion con la tabla phpmailer
 */
 
class Dbphpmailer extends DbDAO {

  public $id = NULL;
  protected $SMTPAuth = NULL;
  protected $SMTPSecure = NULL;
  protected $Host = NULL;
  protected $Port = NULL;
  protected $Username = NULL;
  protected $Password = NULL;
  protected $Froms = NULL;
  protected $FromName = NULL;
  protected $Subject = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setSMTPAuth($mData = NULL) {
    if ($mData === NULL) { $this->SMTPAuth = NULL; }
    $this->SMTPAuth = StripHtml($mData);
  }

  public function setSMTPSecure($mData = NULL) {
    if ($mData === NULL) { $this->SMTPSecure = NULL; }
    $this->SMTPSecure = StripHtml($mData);
  }

  public function setHost($mData = NULL) {
    if ($mData === NULL) { $this->Host = NULL; }
    $this->Host = StripHtml($mData);
  }

  public function setPort($mData = NULL) {
    if ($mData === NULL) { $this->Port = NULL; }
    $this->Port = StripHtml($mData);
  }

  public function setUsername($mData = NULL) {
    if ($mData === NULL) { $this->Username = NULL; }
    $this->Username = StripHtml($mData);
  }

  public function setPassword($mData = NULL) {
    if ($mData === NULL) { $this->Password = NULL; }
    $this->Password = StripHtml($mData);
  }

  public function setFroms($mData = NULL) {
    if ($mData === NULL) { $this->Froms = NULL; }
    $this->Froms = StripHtml($mData);
  }

  public function setFromName($mData = NULL) {
    if ($mData === NULL) { $this->FromName = NULL; }
    $this->FromName = StripHtml($mData);
  }

  public function setSubject($mData = NULL) {
    if ($mData === NULL) { $this->Subject = NULL; }
    $this->Subject = StripHtml($mData);
  }

}
?>
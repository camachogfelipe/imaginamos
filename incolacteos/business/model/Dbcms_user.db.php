<?php
/*
 * @file               : Dbcms_user.db.php
 * @brief              : Clase para la interaccion con la tabla cms_user
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcms_user
 * @brief: Clase para la interaccion con la tabla cms_user
 */
 
class Dbcms_user extends DbDAO {

  protected $id_user = NULL;
  protected $username_user = NULL;
  protected $password_user = NULL;
  protected $email_user = NULL;
  protected $rol_user = NULL;

  public function setid_user($mData = NULL) {
    if ($mData === NULL) { $this->id_user = NULL; }
    $this->id_user = StripHtml($mData);
  }

  public function setusername_user($mData = NULL) {
    if ($mData === NULL) { $this->username_user = NULL; }
    $this->username_user = StripHtml($mData);
  }

  public function setpassword_user($mData = NULL) {
    if ($mData === NULL) { $this->password_user = NULL; }
    $this->password_user = StripHtml($mData);
  }

  public function setemail_user($mData = NULL) {
    if ($mData === NULL) { $this->email_user = NULL; }
    $this->email_user = StripHtml($mData);
  }

  public function setrol_user($mData = NULL) {
    if ($mData === NULL) { $this->rol_user = NULL; }
    $this->rol_user = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbcms_configuration.db.php
 * @brief              : Clase para la interaccion con la tabla cms_configuration
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcms_configuration
 * @brief: Clase para la interaccion con la tabla cms_configuration
 */
 
class Dbcms_configuration extends DbDAO {

  protected $config_id = NULL;
  protected $config_date = NULL;
  protected $config_path = NULL;
  protected $config_web = NULL;
  protected $config_mail_remitent = NULL;
  protected $config_company = NULL;

  public function setconfig_id($mData = NULL) {
    if ($mData === NULL) { $this->config_id = NULL; }
    $this->config_id = StripHtml($mData);
  }

  public function setconfig_date($mData = NULL) {
    if ($mData === NULL) { $this->config_date = NULL; }
    $this->config_date = StripHtml($mData);
  }

  public function setconfig_path($mData = NULL) {
    if ($mData === NULL) { $this->config_path = NULL; }
    $this->config_path = StripHtml($mData);
  }

  public function setconfig_web($mData = NULL) {
    if ($mData === NULL) { $this->config_web = NULL; }
    $this->config_web = StripHtml($mData);
  }

  public function setconfig_mail_remitent($mData = NULL) {
    if ($mData === NULL) { $this->config_mail_remitent = NULL; }
    $this->config_mail_remitent = StripHtml($mData);
  }

  public function setconfig_company($mData = NULL) {
    if ($mData === NULL) { $this->config_company = NULL; }
    $this->config_company = StripHtml($mData);
  }

}
?>
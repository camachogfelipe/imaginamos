<?php
/*
 * @file               : Dbzona_perseg.db.php
 * @brief              : Clase para la interaccion con la tabla zona_perseg
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_perseg
 * @brief: Clase para la interaccion con la tabla zona_perseg
 */

class Dbzona_perseg extends DbDAO {

  public $id = NULL;
  protected $id_persona = NULL;
  protected $con_trab = NULL;
  protected $int_trab = NULL;
  protected $cal_exp = NULL;
  protected $atra_emp = NULL;
  protected $como_tra = NULL;
  protected $demo_tra = NULL;
  protected $expe_emp = NULL;
  protected $reco_emp = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_persona($mData = NULL) {
    if ($mData === NULL) { $this->id_persona = NULL; }
    $this->id_persona = StripHtml($mData);
  }

  public function setcon_trab($mData = NULL) {
    if ($mData === NULL) { $this->con_trab = NULL; }
    $this->con_trab = StripHtml($mData);
  }

  public function setint_trab($mData = NULL) {
    if ($mData === NULL) { $this->int_trab = NULL; }
    $this->int_trab = StripHtml($mData);
  }

  public function setcal_exp($mData = NULL) {
    if ($mData === NULL) { $this->cal_exp = NULL; }
    $this->cal_exp = StripHtml($mData);
  }

  public function setatra_emp($mData = NULL) {
    if ($mData === NULL) { $this->atra_emp = NULL; }
    $this->atra_emp = StripHtml($mData);
  }

  public function setcomo_tra($mData = NULL) {
    if ($mData === NULL) { $this->como_tra = NULL; }
    $this->como_tra = StripHtml($mData);
  }

  public function setdemo_tra($mData = NULL) {
    if ($mData === NULL) { $this->demo_tra = NULL; }
    $this->demo_tra = StripHtml($mData);
  }

  public function setexpe_emp($mData = NULL) {
    if ($mData === NULL) { $this->expe_emp = NULL; }
    $this->expe_emp = StripHtml($mData);
  }

  public function setreco_emp($mData = NULL) {
    if ($mData === NULL) { $this->reco_emp = NULL; }
    $this->reco_emp = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
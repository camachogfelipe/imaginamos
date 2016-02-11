<?php
/*
 * @file               : Dbzona_empseg.db.php
 * @brief              : Clase para la interaccion con la tabla zona_empseg
 * @version            : 3.3
 * @ultima_modificacion: 2013-10-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO version 1.1
 *
 * @class: Dbzona_empseg
 * @brief: Clase para la interaccion con la tabla zona_empseg
 */

class Dbzona_empseg extends DbDAO {

  public $id = NULL;
  protected $id_oferta = NULL;
  protected $con_empl = NULL;
  protected $resu_exp = NULL;
  protected $trav_emar = NULL;
  protected $num_emple = NULL;
  protected $num_cedulas = NULL;
  protected $cali_exp = NULL;
  protected $tiem_esp = NULL;
  protected $como_emp = NULL;
  protected $util_emar = NULL;
  protected $elim_ofe = NULL;
  protected $fec_creasi = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setid_oferta($mData = NULL) {
    if ($mData === NULL) { $this->id_oferta = NULL; }
    $this->id_oferta = StripHtml($mData);
  }

  public function setcon_empl($mData = NULL) {
    if ($mData === NULL) { $this->con_empl = NULL; }
    $this->con_empl = StripHtml($mData);
  }

  public function setresu_exp($mData = NULL) {
    if ($mData === NULL) { $this->resu_exp = NULL; }
    $this->resu_exp = StripHtml($mData);
  }

  public function settrav_emar($mData = NULL) {
    if ($mData === NULL) { $this->trav_emar = NULL; }
    $this->trav_emar = StripHtml($mData);
  }

  public function setnum_emple($mData = NULL) {
    if ($mData === NULL) { $this->num_emple = NULL; }
    $this->num_emple = StripHtml($mData);
  }

  public function setnum_cedulas($mData = NULL) {
    if ($mData === NULL) { $this->num_cedulas = NULL; }
    $this->num_cedulas = StripHtml($mData);
  }

  public function setcali_exp($mData = NULL) {
    if ($mData === NULL) { $this->cali_exp = NULL; }
    $this->cali_exp = StripHtml($mData);
  }

  public function settiem_esp($mData = NULL) {
    if ($mData === NULL) { $this->tiem_esp = NULL; }
    $this->tiem_esp = StripHtml($mData);
  }

  public function setcomo_emp($mData = NULL) {
    if ($mData === NULL) { $this->como_emp = NULL; }
    $this->como_emp = StripHtml($mData);
  }

  public function setutil_emar($mData = NULL) {
    if ($mData === NULL) { $this->util_emar = NULL; }
    $this->util_emar = StripHtml($mData);
  }

  public function setelim_ofe($mData = NULL) {
    if ($mData === NULL) { $this->elim_ofe = NULL; }
    $this->elim_ofe = StripHtml($mData);
  }

  public function setfec_creasi($mData = NULL) {
    if ($mData === NULL) { $this->fec_creasi = NULL; }
    $this->fec_creasi = StripHtml($mData);
  }

}
?>
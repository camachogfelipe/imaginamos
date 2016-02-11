<?php
/*
 * @file               : Dbnewsletter.db.php
 * @brief              : Clase para la interaccion con la tabla newsletter
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbnewsletter
 * @brief: Clase para la interaccion con la tabla newsletter
 */
 
class Dbnewsletter extends DbDAO {

  protected $idnewsletter = NULL;
  protected $nombre = NULL;
  protected $email = NULL;

  public function setidnewsletter($mData = NULL) {
    if ($mData === NULL) { $this->idnewsletter = NULL; }
    $this->idnewsletter = StripHtml($mData);
  }

  public function setnombre($mData = NULL) {
    if ($mData === NULL) { $this->nombre = NULL; }
    $this->nombre = StripHtml($mData);
  }

  public function setemail($mData = NULL) {
    if ($mData === NULL) { $this->email = NULL; }
    $this->email = StripHtml($mData);
  }

}
?>
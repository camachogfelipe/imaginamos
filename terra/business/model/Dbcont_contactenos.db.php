<?php
/*
 * @file               : Dbcont_contactenos.db.php
 * @brief              : Clase para la interaccion con la tabla cont_contactenos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-26
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcont_contactenos
 * @brief: Clase para la interaccion con la tabla cont_contactenos
 */
 
class Dbcont_contactenos extends DbDAO {

  public $id = NULL;
  protected $texto = NULL;
  protected $img = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

}
?>
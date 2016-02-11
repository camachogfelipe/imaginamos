<?php
/*
 * @file               : Dbform_contacto.db.php
 * @brief              : Clase para la interaccion con la tabla form_contacto
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbform_contacto
 * @brief: Clase para la interaccion con la tabla form_contacto
 */
 
class Dbform_contacto extends DbDAO {

  public $id = NULL;
  protected $nombre = NULL;
  protected $correo = NULL;
  protected $telefono = NULL;
  protected $comentario = NULL;

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

  public function settelefono($mData = NULL) {
    if ($mData === NULL) { $this->telefono = NULL; }
    $this->telefono = StripHtml($mData);
  }

  public function setcomentario($mData = NULL) {
    if ($mData === NULL) { $this->comentario = NULL; }
    $this->comentario = StripHtml($mData);
  }

}
?>
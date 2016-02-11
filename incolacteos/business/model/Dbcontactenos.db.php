<?php
/*
 * @file               : Dbcontactenos.db.php
 * @brief              : Clase para la interaccion con la tabla contactenos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcontactenos
 * @brief: Clase para la interaccion con la tabla contactenos
 */
 
class Dbcontactenos extends DbDAO {

  public $id = NULL;
  protected $nombres = NULL;
  protected $ciudad = NULL;
  protected $correo = NULL;
  protected $asunto = NULL;
  protected $comentario = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setnombres($mData = NULL) {
    if ($mData === NULL) { $this->nombres = NULL; }
    $this->nombres = StripHtml($mData);
  }

  public function setciudad($mData = NULL) {
    if ($mData === NULL) { $this->ciudad = NULL; }
    $this->ciudad = StripHtml($mData);
  }

  public function setcorreo($mData = NULL) {
    if ($mData === NULL) { $this->correo = NULL; }
    $this->correo = StripHtml($mData);
  }

  public function setasunto($mData = NULL) {
    if ($mData === NULL) { $this->asunto = NULL; }
    $this->asunto = StripHtml($mData);
  }

  public function setcomentario($mData = NULL) {
    if ($mData === NULL) { $this->comentario = NULL; }
    $this->comentario = StripHtml($mData);
  }

}
?>
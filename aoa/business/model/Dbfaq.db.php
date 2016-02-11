<?php
/*
 * @file               : Dbfaq.db.php
 * @brief              : Clase para la interaccion con la tabla faq
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbfaq
 * @brief: Clase para la interaccion con la tabla faq
 */
 
class Dbfaq extends DbDAO {

  public $id = NULL;
  protected $pregunta = NULL;
  protected $respuesta = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setpregunta($mData = NULL) {
    if ($mData === NULL) { $this->pregunta = NULL; }
    $this->pregunta = StripHtml($mData);
  }

  public function setrespuesta($mData = NULL) {
    if ($mData === NULL) { $this->respuesta = NULL; }
    $this->respuesta = StripHtml($mData);
  }

}
?>
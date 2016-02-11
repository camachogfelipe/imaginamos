<?php
/*
 * @file               : Dbservicios.db.php
 * @brief              : Clase para la interaccion con la tabla servicios
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-25
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.2
 *
 * @class: Dbservicios
 * @brief: Clase para la interaccion con la tabla servicios
 */
 
class Dbservicios extends DbDAO {

  public $id = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;
  protected $visible_condiciones = NULL;
  protected $visible_contacto = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setimagen($mData = NULL) {
    if ($mData === NULL) { $this->imagen = NULL; }
    $this->imagen = StripHtml($mData);
  }

  public function setvisible_condiciones($mData = NULL) {
    if ($mData === NULL) { $this->visible_condiciones = NULL; }
    $this->visible_condiciones = StripHtml($mData);
  }

  public function setvisible_contacto($mData = NULL) {
    if ($mData === NULL) { $this->visible_contacto = NULL; }
    $this->visible_contacto = StripHtml($mData);
  }

}
?>
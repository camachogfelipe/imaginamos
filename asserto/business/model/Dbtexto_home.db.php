<?php
/*
 * @file               : Dbtexto_home.db.php
 * @brief              : Clase para la interaccion con la tabla texto_home
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-12
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbtexto_home
 * @brief: Clase para la interaccion con la tabla texto_home
 */
 
class Dbtexto_home extends DbDAO {

  protected $idtexto = NULL;
  protected $idhome = NULL;
  protected $texto = NULL;
  protected $fecha_creacion = NULL;
  protected $fecha_modificacion = NULL;

  public function setidtexto($mData = NULL) {
    if ($mData === NULL) { $this->idtexto = NULL; }
    $this->idtexto = StripHtml($mData);
  }

  public function setidhome($mData = NULL) {
    if ($mData === NULL) { $this->idhome = NULL; }
    $this->idhome = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setfecha_creacion($mData = NULL) {
    if ($mData === NULL) { $this->fecha_creacion = NULL; }
    $this->fecha_creacion = StripHtml($mData);
  }

  public function setfecha_modificacion($mData = NULL) {
    if ($mData === NULL) { $this->fecha_modificacion = NULL; }
    $this->fecha_modificacion = StripHtml($mData);
  }

}
?>
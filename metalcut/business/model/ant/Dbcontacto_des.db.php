<?php
/*
 * @file               : Dbcontacto_des.db.php
 * @brief              : Clase para la interaccion con la tabla contacto_des
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcontacto_des
 * @brief: Clase para la interaccion con la tabla contacto_des
 */
 
class Dbcontacto_des extends DbDAO {

  protected $idcontacto_des = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $mapa = NULL;

  public function setidcontacto_des($mData = NULL) {
    if ($mData === NULL) { $this->idcontacto_des = NULL; }
    $this->idcontacto_des = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setmapa($mData = NULL) {
    if ($mData === NULL) { $this->mapa = NULL; }
    $this->mapa = StripHtml($mData);
  }

}
?>
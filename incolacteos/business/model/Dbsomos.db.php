<?php
/*
 * @file               : Dbsomos.db.php
 * @brief              : Clase para la interaccion con la tabla somos
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbsomos
 * @brief: Clase para la interaccion con la tabla somos
 */
 
class Dbsomos extends DbDAO {

  public $id = NULL;
  protected $img = NULL;
  protected $video = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $pos_video = NULL;

  public function setid($mData = NULL) {
    if ($mData === NULL) { $this->id = NULL; }
    $this->id = StripHtml($mData);
  }

  public function setimg($mData = NULL) {
    if ($mData === NULL) { $this->img = NULL; }
    $this->img = StripHtml($mData);
  }

  public function setvideo($mData = NULL) {
    if ($mData === NULL) { $this->video = NULL; }
    $this->video = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function settexto($mData = NULL) {
    if ($mData === NULL) { $this->texto = NULL; }
    $this->texto = StripHtml($mData);
  }

  public function setpos_video($mData = NULL) {
    if ($mData === NULL) { $this->pos_video = NULL; }
    $this->pos_video = StripHtml($mData);
  }

}
?>
<?php
/*
 * @file               : Dbcopiado.db.php
 * @brief              : Clase para la interaccion con la tabla copiado
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-06
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcopiado
 * @brief: Clase para la interaccion con la tabla copiado
 */
 
class Dbcopiado extends DbDAO {

  protected $idcopiado = NULL;
  protected $titulo = NULL;
  protected $texto = NULL;
  protected $imagen = NULL;

  public function setidcopiado($mData = NULL) {
    if ($mData === NULL) { $this->idcopiado = NULL; }
    $this->idcopiado = StripHtml($mData);
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

}
?>
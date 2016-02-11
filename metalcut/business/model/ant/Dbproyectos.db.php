<?php
/*
 * @file               : Dbproyectos.db.php
 * @brief              : Clase para la interaccion con la tabla proyectos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbproyectos
 * @brief: Clase para la interaccion con la tabla proyectos
 */
 
class Dbproyectos extends DbDAO {

  protected $idproyectos = NULL;
  protected $titulo = NULL;
  protected $proyecto = NULL;
  protected $lugar = NULL;
  protected $uso = NULL;
  protected $area = NULL;
  protected $actividades = NULL;
  protected $cliente = NULL;
  protected $ano_ini = NULL;
  protected $mes_ini = NULL;
  protected $ano_fin = NULL;
  protected $mes_fin = NULL;

  public function setidproyectos($mData = NULL) {
    if ($mData === NULL) { $this->idproyectos = NULL; }
    $this->idproyectos = StripHtml($mData);
  }

  public function settitulo($mData = NULL) {
    if ($mData === NULL) { $this->titulo = NULL; }
    $this->titulo = StripHtml($mData);
  }

  public function setproyecto($mData = NULL) {
    if ($mData === NULL) { $this->proyecto = NULL; }
    $this->proyecto = StripHtml($mData);
  }

  public function setlugar($mData = NULL) {
    if ($mData === NULL) { $this->lugar = NULL; }
    $this->lugar = StripHtml($mData);
  }

  public function setuso($mData = NULL) {
    if ($mData === NULL) { $this->uso = NULL; }
    $this->uso = StripHtml($mData);
  }

  public function setarea($mData = NULL) {
    if ($mData === NULL) { $this->area = NULL; }
    $this->area = StripHtml($mData);
  }

  public function setactividades($mData = NULL) {
    if ($mData === NULL) { $this->actividades = NULL; }
    $this->actividades = StripHtml($mData);
  }

  public function setcliente($mData = NULL) {
    if ($mData === NULL) { $this->cliente = NULL; }
    $this->cliente = StripHtml($mData);
  }

  public function setano_ini($mData = NULL) {
    if ($mData === NULL) { $this->ano_ini = NULL; }
    $this->ano_ini = StripHtml($mData);
  }

  public function setmes_ini($mData = NULL) {
    if ($mData === NULL) { $this->mes_ini = NULL; }
    $this->mes_ini = StripHtml($mData);
  }

  public function setano_fin($mData = NULL) {
    if ($mData === NULL) { $this->ano_fin = NULL; }
    $this->ano_fin = StripHtml($mData);
  }

  public function setmes_fin($mData = NULL) {
    if ($mData === NULL) { $this->mes_fin = NULL; }
    $this->mes_fin = StripHtml($mData);
  }

}
?>
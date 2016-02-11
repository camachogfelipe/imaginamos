<?php

/*
 * @file               : Dbconsulta_final.db.php
 * @brief              : Clase para la interaccion con la tabla consulta_final
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbconsulta_final
 * @brief: Clase para la interaccion con la tabla consulta_final
 */

class Dbconsulta_final extends DbDAO {

public $id = NULL;
protected $id_cotizacion = NULL;
protected $asesor = NULL;
protected $email = NULL;
protected $valor cotizacion = NULL;
protected $telefono = NULL;
protected $celular = NULL;
protected $comentario = NULL;
protected $consulta_final_id = NULL;
protected $contizaciones_id = NULL;

public function setid($mData = NULL) {
if ($mData === NULL) { $this->id = NULL;
}
$this->id = StripHtml($mData);
}

public function setid_cotizacion($mData = NULL) {
if ($mData === NULL) { $this->id_cotizacion = NULL;
}
$this->id_cotizacion = StripHtml($mData);
}

public function setasesor($mData = NULL) {
if ($mData === NULL) { $this->asesor = NULL;
}
$this->asesor = StripHtml($mData);
}

public function setemail($mData = NULL) {
if ($mData === NULL) { $this->email = NULL;
}
$this->email = StripHtml($mData);
}

public function setvalor cotizacion($mData = NULL) {
if ($mData === NULL) { $this->valor cotizacion = NULL;
}
$this->valor cotizacion = StripHtml($mData);
}

public function settelefono($mData = NULL) {
if ($mData === NULL) { $this->telefono = NULL;
}
$this->telefono = StripHtml($mData);
}

public function setcelular($mData = NULL) {
if ($mData === NULL) { $this->celular = NULL;
}
$this->celular = StripHtml($mData);
}

public function setcomentario($mData = NULL) {
if ($mData === NULL) { $this->comentario = NULL;
}
$this->comentario = StripHtml($mData);
}

public function setconsulta_final_id($mData = NULL) {
if ($mData === NULL) { $this->consulta_final_id = NULL;
}
$this->consulta_final_id = StripHtml($mData);
}

public function setcontizaciones_id($mData = NULL) {
if ($mData === NULL) { $this->contizaciones_id = NULL;
}
$this->contizaciones_id = StripHtml($mData);
}

}
?>
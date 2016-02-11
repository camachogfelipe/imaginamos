<?php

class cotizacion{

	private $cotizacion_id;
	private $cliente_id;
	private $cotizacion_fechaSolicitud;
	private $cotizacion_fechaRespuesta;
	private $estado_id;
	private $estado_obeservacion;

function __construct(){
	
	$this->cotizacion_id = NULL;
	$this->cliente_id = NULL;
	$this->cotizacion_fechaSolicitud = NULL;
	$this->cotizacion_fechaRespuesta = NULL;
	$this->estado_id = NULL;
	$this->estado_obeservacion = NULL;

}

function getId(){
	return $this->cotizacion_id;
}

function getClienteId(){
	return $this->cliente_id;
}

function getFechaSolicitud(){
	return $this->cotizacion_fechaSolicitud;
}

function getFechaRespuesta(){
	return $this->cotizacion_fechaRespuesta;
}

function getEstadoId(){
	return $this->estado_id;
}

function getObservacion(){
	return $this->estado_obeservacion;
}

//Funciones Set

function setId($cotizacion_id){
	$this->cotizacion_id = $cotizacion_id;
}

function setClienteId($cliente_id){
	$this->cliente_id = $cliente_id;
}

function setFechaSolicitud($cotizacion_fechaSolicitud){
	$this->cotizacion_fechaSolicitud = $cotizacion_fechaSolicitud;
}

function setFechaRespuesta($cotizacion_fechaRespuesta){
	$this->cotizacion_fechaRespuesta = $cotizacion_fechaRespuesta;
}

function setEstadoId($estado_id){
	$this->estado_id = $estado_id;
}

function setObservacion($estado_obeservacion){
	$this->estado_obeservacion = $estado_obeservacion;
} 	

	
}


?>
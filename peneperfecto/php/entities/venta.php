<?php

class venta{

private $id;
private $fecha;
private $nombre;
private $apellido;
private $pais;
private $mail;
private $telefono;
private $fpago;
private $total;
private $descripcion;
private $confirmacion;
private $pass;


function __construct(){
	$this->id = NULL;
	$this->fecha = NULL;
	$this->nombre = NULL;
	$this->apellido = NULL;
	$this->pais = NULL;
	$this->mail = NULL;
	$this->telefono = NULL;
	$this->fpago = NULL;
	$this->total = NULL;
	$this->descripcion = NULL;
	$this->confirmacion = NULL;
	$this->pass = NULL;
}

function getid(){
	return $this->id;
}

function getfecha(){
	return $this->fecha;
}

function getnombre(){
	return $this->nombre;
}

function getapellido(){
	return $this->apellido;
}

function getpais(){
	return $this->pais;
}

function getmail(){
	return $this->mail;
}

function gettelefono(){
	return $this->telefono;
}

function getfpago(){
	return $this->fpago;
}

function gettotal(){
	return $this->total;
}

function getdescripcion(){
	return $this->descripcion;
}

function getconfirmacion(){
	return $this->confirmacion;
}

function getpass(){
	return $this->pass;
}



function setid($id){
	$this->id = $id;
}

function setfecha($fecha){
	$this->fecha = $fecha;
}

function setnombre($nombre){
	$this->nombre = $nombre;
}

function setapellido($apellido){
	$this->apellido = $apellido;
}

function setpais($pais){
	$this->pais = $pais;
}

function setmail($mail){
	$this->mail = $mail;
}

function settelefono($telefono){
	$this->telefono = $telefono;
}

function setfpago($fpago){
	$this->fpago = $fpago;
}

function settotal($total){
	$this->total = $total;
}

function setdescripcion($descripcion){
	$this->descripcion = $descripcion;
}

function setconfirmacion($confirmacion){
	$this->confirmacion = $confirmacion;
}

function setpass($pass){
	$this->pass = $pass;
}



}
?>
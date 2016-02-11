<?php

class cliente{
	private $cliente_id;
	private $tipoid_cod;
	private $cliente_nombre;
	private $cliente_apellidos;
	private $cliente_empresa;
	private $cliente_cargo;
	private $cliente_telfijo;
	private $cliente_telcel;
	private $cliente_direccion;
	private $ciudad_id;
	private $cliente_email;
	private $cliente_pass;
	private $cliente_registro;
	private $cliente_newsletter;
	private $cliente_idioma;
	private $pais;
	

function __construct(){
	$this->cliente_id = NULL;
	$this->tipoid_cod = NULL;
	$this->cliente_nombre = NULL;
	$this->cliente_apellidos = NULL;
	$this->cliente_empresa = NULL;
	$this->cliente_cargo = NULL;
	$this->cliente_telfijo = NULL;
	$this->cliente_telcel = NULL;
	$this->cliente_direccion = NULL;
	$this->ciudad_id = NULL;
	$this->cliente_email = NULL;
	$this->cliente_pass = NULL;
	$this->cliente_registro = NULL;
	$this->cliente_newsletter = NULL;
	$this->cliente_idioma = NULL;
	$this->pais = NULL;

}	

function getId(){
	return $this->id;
}

function getClienteId(){
	return $this->cliente_id;
}

function getTipoid(){
	return $this->tipoid_cod;
}

function getNombre(){
	return $this->cliente_nombre;
}

function getApellido(){
	return $this->cliente_apellidos;
}

function getEmpresa(){
	return $this->cliente_empresa;
}

function getCargo(){
	return $this->cliente_cargo;
}

function getTelFijo(){
	return $this->cliente_telfijo;
}

function getTelCel(){
	return $this->cliente_telcel;
}

function getDireccion(){
	return $this->cliente_direccion;
}

function getCiudadId(){
	return $this->ciudad_id;
}

function getEmail(){
	return $this->cliente_email;
}

function getClave(){
	return $this->cliente_pass;
}

function getRegistro(){
	return $this->cliente_registro;
}

function getNewsletter(){
	return $this->cliente_newsletter;
}

function getIdioma(){
	return $this->cliente_idioma;
}

function getPais(){
	return $this->pais;
}

//Funciones Set

function setId($id){
	$this->id = $id;
}

function setClienteId($cliente_id){
	$this->cliente_id = $cliente_id;
}

function setTipoid($tipoid_cod){
	$this->tipoid_cod = $tipoid_cod;
}

function setNombre($cliente_nombre){
	$this->cliente_nombre = $cliente_nombre;
}

function setApellido($cliente_apellidos){
	$this->cliente_apellidos = $cliente_apellidos;
}

function setEmpresa($cliente_empresa){
	$this->cliente_empresa = $cliente_empresa;
}

function setCargo($cliente_cargo){
	$this->cliente_cargo = $cliente_cargo;
}

function setTelFijo($cliente_telfijo){
	$this->cliente_telfijo = $cliente_telfijo;
}

function setTelCel($cliente_telcel){
	$this->cliente_telcel = $cliente_telcel;
}

function setDireccion($cliente_direccion){
	$this->cliente_direccion = $cliente_direccion;
}

function setCiudadId($ciudad_id){
	$this->ciudad_id = $ciudad_id;
}

function setEmail($cliente_email){
	$this->cliente_email = $cliente_email;
}

function setClave($cliente_pass){
	$this->cliente_pass = $cliente_pass;
}

function setRegistro($cliente_registro){
	$this->cliente_registro = $cliente_registro;
}

function setNewsletter($cliente_newsletter){
	$this->cliente_newsletter = $cliente_newsletter;
}

function setIdioma($cliente_idioma){
	$this->cliente_idioma = $cliente_idioma;
}

function setPais($pais){
	$this->pais = $pais;
}

}
//Final de clase cliente
?>
<?php 

class punto{

	private $punto_id;
	private $punto_nombre;
	private $ciudad_id;
	private $punto_direccion;
	private $punto_tel;
	private $punto_pbx;
	private $punto_email;
	private $punto_hlv;
	private $punto_hs;
	private $tipoPunto_id;
	private $punto_gmap;
	private $seccion_id;
	private $flag_id;

	function __construct(){

		$this->punto_id = NULL;
		$this->punto_nombre = NULL;
		$this->ciudad_id = NULL;
		$this->punto_direccion = NULL;
		$this->punto_tel = NULL;
		$this->punto_pbx = NULL;
		$this->punto_email = NULL;
		$this->punto_hlv = NULL;
		$this->punto_hs = NULL;
		$this->tipoPunto_id = NULL;
		$this->punto_gmap = NULL;
		$this->seccion_id = NULL;
		$this->flag_id = NULL;

	}

	function getId(){
		return $this->punto_id;
	}		

	function getNombre(){
		return $this->punto_nombre;
	}		

	function getCiudadId(){
		return $this->ciudad_id;
	}				

	function getDireccion(){
		return $this->punto_direccion;
	}				

	function getTel(){
		return $this->punto_tel;
	}				

	function getPbx(){
		return $this->punto_pbx;
	}				

	function getEmail(){
		return $this->punto_email;
	}				

	function getHlv(){
		return $this->punto_hlv;
	}				

	function getHs(){
		return $this->punto_hs;
	}				

	function getTipoPuntoId(){
		return $this->tipoPunto_id;
	}				

	function getGmap(){
		return $this->punto_gmap;
	}				

	function getSeccionId(){
		return $this->seccion_id;
	}				

	function getFlagId(){
		return $this->flag_id;
	}				

//Funciones SET


	function setId($punto_id){
		$this->punto_id = $punto_id;
	}		

	function setNombre($punto_nombre){
		$this->punto_nombre = $punto_nombre;
	}		

	function setCiudadId($ciudad_id){
		$this->ciudad_id = $ciudad_id;
	}				

	function setDireccion($punto_direccion){
		$this->punto_direccion = $punto_direccion;
	}				

	function setTel($punto_tel){
		$this->punto_tel = $punto_tel;
	}				

	function setPbx($punto_pbx){
		$this->punto_pbx = $punto_pbx;
	}				

	function setEmail($punto_email){
		$this->punto_email = $punto_email;
	}				

	function setHlv($punto_hlv){
		$this->punto_hlv = $punto_hlv;
	}				

	function setHs($punto_hs){
		$this->punto_hs = $punto_hs;
	}				

	function setTipoPuntoId($tipoPunto_id){
		$this->tipoPunto_id = $tipoPunto_id;
	}				

	function setGmap($punto_gmap){
		$this->punto_gmap = $punto_gmap;
	}				

	function setSeccionId($seccion_id){
		$this->seccion_id = $seccion_id;
	}				

	function setFlagId($flag_id){
		$this->flag_id = $flag_id;
	}				

}





 ?>
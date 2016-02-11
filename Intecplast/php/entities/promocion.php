<?php 

class promocion{
	
	private $promocion_id;
	private $promocion_titulo_e;
	private $promocion_descripcion_e;
	private $promocion_imagen_e;
	private $promocion_titulo_i;
	private $promocion_descripcion_i;
	private $promocion_imagen_i;
	private $promocion_referencia;
	private $promocion_precio;
	private $promocion_unidades;
	private $seccion_id;
	private $promocion_destacada;


	function __construct(){
		
		$this->promocion_id = NULL;
		$this->promocion_titulo_e = NULL;
		$this->promocion_descripcion_e = NULL;
		$this->promocion_imagen_e = NULL;
		$this->promocion_titulo_i = NULL;
		$this->promocion_descripcion_i = NULL;
		$this->promocion_imagen_i = NULL;
		$this->promocion_referencia = NULL;
		$this->promocion_precio = NULL;
		$this->promocion_unidades = NULL;
		$this->seccion_id = NULL;
		$this->promocion_destacada = NULL;

	}
	
	//Funciones GET
	
	function getId(){
		return $this->promocion_id;
	}

	function getTitulo_e(){
		return $this->promocion_titulo_e;
	}
	
	function getDescripcion_e(){
		return $this->promocion_descripcion_e;
	}
	
	function getImagen_e(){
		return $this->promocion_imagen_e;
	}
	
	function getTitulo_i(){
		return $this->promocion_titulo_i;
	}
	
	function getDescripcion_i(){
		return $this->promocion_descripcion_i;
	}
	
	function getImagen_i(){
		return $this->promocion_imagen_i;
	}
	
	function getReferencia(){
		return $this->promocion_referencia;
	}
	
	function getPrecio(){
		return $this->promocion_precio;
	}
	
	function getUnidades(){
		return $this->promocion_unidades;
	}

	function getSeccionId(){
		return $this->seccion_id;
	}

	function getDestacada(){
		return $this->promocion_destacada;
	}
	
	//Funciones SET

	function setId($promocion_id){
		$this->promocion_id = $promocion_id;
	}

	function setTitulo_e($promocion_titulo_e){
		$this->promocion_titulo_e = $promocion_titulo_e;
	}
	
	function setDescripcion_e($promocion_descripcion_e){
		$this->promocion_descripcion_e = $promocion_descripcion_e;
	}
	
	function setImagen_e($promocion_imagen_e){
		$this->promocion_imagen_e = $promocion_imagen_e;
	}
	
	function setTitulo_i($promocion_titulo_i){
		$this->promocion_titulo_i = $promocion_titulo_i;
	}
	
	function setDescripcion_i($promocion_descripcion_i){
		$this->promocion_descripcion_i = $promocion_descripcion_i;
	}
	
	function setImagen_i($promocion_imagen_i){
		$this->promocion_imagen_i = $promocion_imagen_i;
	}
	
	function setReferencia($promocion_referencia){
		$this->promocion_referencia = $promocion_referencia;
	}
	
	function setPrecio($promocion_precio){
		$this->promocion_precio = $promocion_precio;
	}
	
	function setUnidades($promocion_unidades){
		$this->promocion_unidades = $promocion_unidades;
	}

	function setSeccionId($seccion_id){
		$this->seccion_id = $seccion_id;
	}

	function setDestacada($promocion_destacada){
		$this->promocion_destacada = $promocion_destacada;
	}
}

?>
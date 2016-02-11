<?php 

class noticia{
	
	private $noticia_id;
	private $noticia_titulo_e;
	private $noticia_descripcion_e;
	private $noticia_imagen_e;
	private $noticia_enlace_e;
	private $noticia_titulo_i;
	private $noticia_descripcion_i;
	private $noticia_imagen_i;
	private $noticia_enlace_i;
	private $seccion_id;
	private $noticia_fecha;

	function __construct(){
		
		$this->noticia_id = NULL;
		$this->noticia_titulo_e = NULL;
		$this->noticia_descripcion_e = NULL;
		$this->noticia_imagen_e = NULL;
		$this->noticia_enlace_e = NULL;
		$this->noticia_titulo_i = NULL;
		$this->noticia_descripcion_i = NULL;
		$this->noticia_imagen_i = NULL;
		$this->noticia_enlace_i = NULL;
		$this->seccion_id = NULL;
		$this->noticia_fecha = NULL;

	}
	
	//Funciones GET
	
	function getId(){
		return $this->noticia_id;
	}

	function getTitulo_e(){
		return $this->noticia_titulo_e;
	}
	
	function getDescripcion_e(){
		return $this->noticia_descripcion_e;
	}
	
	function getImagen_e(){
		return $this->noticia_imagen_e;
	}
	
	function getEnlace_e(){
		return $this->noticia_enlace_e;
	}
	
	function getTitulo_i(){
		return $this->noticia_titulo_i;
	}
	
	function getDescripcion_i(){
		return $this->noticia_descripcion_i;
	}
	
	function getImagen_i(){
		return $this->noticia_imagen_i;
	}
	
	function getEnlace_i(){
		return $this->noticia_enlace_i;
	}

	function getSeccionId(){
		return $this->seccion_id;
	}
	
	function getFecha(){
		return $this->noticia_fecha;
	}

	function getMes(){
		return $this->noticia_fecha;
	}

	function getAnio(){
		return $this->noticia_fecha;
	}

	//Funciones SET

	function setId($noticia_id){
		$this->noticia_id = $noticia_id;
	}

	function setTitulo_e($noticia_titulo_e){
		$this->noticia_titulo_e = $noticia_titulo_e;
	}
	
	function setDescripcion_e($noticia_descripcion_e){
		$this->noticia_descripcion_e = $noticia_descripcion_e;
	}
	
	function setImagen_e($noticia_imagen_e){
		$this->noticia_imagen_e = $noticia_imagen_e;
	}
	
	function setEnlace_e($noticia_enlace_e){
		$this->noticia_enlace_e = $noticia_enlace_e;
	}
	
	function setTitulo_i($noticia_titulo_i){
		$this->noticia_titulo_i = $noticia_titulo_i;
	}
	
	function setDescripcion_i($noticia_descripcion_i){
		$this->noticia_descripcion_i = $noticia_descripcion_i;
	}
	
	function setImagen_i($noticia_imagen_i){
		$this->noticia_imagen_i = $noticia_imagen_i;
	}
	
	function setEnlace_i($noticia_enlace_i){
		$this->noticia_enlace_i = $noticia_enlace_i;
	}

	function setSeccionId($seccion_id){
		$this->seccion_id = $seccion_id;
	}

	function setFecha($noticia_fecha){
		$this->noticia_fecha = $noticia_fecha;
	}

	function setMes($noticia_fecha){
		$this->noticia_fecha = $noticia_fecha;
	}

	function setAnio($noticia_anio){
		$this->noticia_anio = $noticia_anio;
	}
}

?>
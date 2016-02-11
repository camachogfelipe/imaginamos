<?php
class convocatoria{

	private $convocatoria_id;
	private $convocatoria_titulo_e;
	private $convocatoria_cargo_e;
	private $convocatoria_funciones_e;
	private $convocatoria_requisitos_e;
	private $convocatoria_titulo_i;
	private $convocatoria_cargo_i;
	private $convocatoria_funciones_i;
	private $convocatoria_requisitos_i;
	private $convocatoria_salario;
	private $convocatoria_vigencia;
	private $seccion_id;
	private $flag_id;
	
	function __construct(){

		$this->convocatoria_id = NULL;
		$this->convocatoria_titulo_e = NULL;
		$this->convocatoria_cargo_e = NULL;
		$this->convocatoria_funciones_e = NULL;
		$this->convocatoria_requisitos_e = NULL;
		$this->convocatoria_titulo_i = NULL;
		$this->convocatoria_cargo_i = NULL;
		$this->convocatoria_funciones_i = NULL;
		$this->convocatoria_requisitos_i = NULL;
		$this->convocatoria_salario = NULL;
		$this->convocatoria_vigencia = NULL;
		$this->seccion_id = NULL;
		$this->flag_id = NULL;
	
	}
	
	//Funciones GET

	function getId(){
		return $this->convocatoria_id;
	}

	function getTitulo_e(){
		return $this->convocatoria_titulo_e;
	}

	function getCargo_e(){
		return $this->convocatoria_cargo_e;
	}

	function getFunciones_e(){
		return $this->convocatoria_funciones_e;
	}

	function getRequisitos_e(){
		return $this->convocatoria_requisitos_e;
	}

	function getTitulo_i(){
		return $this->convocatoria_titulo_i;
	}

	function getCargo_i(){
		return $this->convocatoria_cargo_i;
	}

	function getFunciones_i(){
		return $this->convocatoria_funciones_i;
	}

	function getRequisitos_i(){
		return $this->convocatoria_requisitos_i;
	}

	function getSalario(){
		return $this->convocatoria_salario;
	}

	function getVigencia(){
		return $this->convocatoria_vigencia;
	}

	function getSeccionId(){
		return $this->seccion_id;
	}

	function getFlagId(){
		return $this->flag_id;
	}

	//Funciones SET

	function setId($convocatoria_id){
		$this->convocatoria_id = $convocatoria_id;
	}

	function setTitulo_e($convocatoria_titulo_e){
		$this->convocatoria_titulo_e = $convocatoria_titulo_e;
	}

	function setCargo_e($convocatoria_cargo_e){
		$this->convocatoria_cargo_e = $convocatoria_cargo_e;
	}

	function setFunciones_e($convocatoria_funciones_e){
		$this->convocatoria_funciones_e = $convocatoria_funciones_e;
	}

	function setRequisitos_e($convocatoria_requisitos_e){
		$this->convocatoria_requisitos_e = $convocatoria_requisitos_e;
	}

	function setTitulo_i($convocatoria_titulo_i){
		$this->convocatoria_titulo_i = $convocatoria_titulo_i;
	}

	function setCargo_i($convocatoria_cargo_i){
		$this->convocatoria_cargo_i = $convocatoria_cargo_i;
	}

	function setFunciones_i($convocatoria_funciones_i){
		$this->convocatoria_funciones_i = $convocatoria_funciones_i;
	}

	function setRequisitos_i($convocatoria_requisitos_i){
		$this->convocatoria_requisitos_i = $convocatoria_requisitos_i;
	}

	function setSalario($convocatoria_salario){
		$this->convocatoria_salario = $convocatoria_salario;
	}

	function setVigencia($convocatoria_vigencia){
		$this->convocatoria_vigencia = $convocatoria_vigencia;
	}

	function setSeccionId($seccion_id){
		$this->seccion_id = $seccion_id;
	}

	function setFlagId($flag_id){
		$this->flag_id = $flag_id;
	}




}
?>
<?php

class producto{

	private $producto_codigo;
	private $producto_descripcion;
	private $producto_nombre;
	private $categoria_id;
	private $sublinea_id;
	private $forma_id;
	private $producto_atributo1;
	private $producto_atributo2;
	private $producto_entradas;
	private $tamano_id;
	private $producto_capacidad;
	private $producto_unidadCap;
	private $material_id;
	private $color_id;
	private $producto_boca;
	private $producto_unidadBoca;
	private $producto_peso;
	private $producto_terminado;
	private $linner_id;
	private $falda_id;
	private $producto_cavidades;
	private $producto_anotacion;
	private $clase_id;
	private $producto_imagen;
	private $boca_id;
	private $capacidad_id;
	private $producto_descripcion_i;
	private $producto_nombre_i;
	private $producto_terminado_i;
	private $producto_anotacion_i;


function __construct(){

	$this->producto_codigo = NULL;
	$this->producto_descripcion = NULL;
	$this->producto_nombre = NULL;
	$this->categoria_id = NULL;
	$this->sublinea_id = NULL;
	$this->forma_id = NULL;
	$this->producto_atributo1 = NULL;
	$this->producto_atributo2 = NULL;
	$this->producto_entradas = NULL;
	$this->tamano_id = NULL;
	$this->producto_capacidad = NULL;
	$this->producto_unidadCap = NULL;
	$this->material_id = NULL;
	$this->color_id = NULL;
	$this->producto_boca = NULL;
	$this->producto_unidadBoca = NULL;
	$this->producto_peso = NULL;
	$this->producto_terminado = NULL;
	$this->linner_id = NULL;
	$this->falda_id = NULL;
	$this->producto_cavidades = NULL;
	$this->producto_anotacion = NULL;
	$this->clase_id = NULL;
	$this->producto_imagen = NULL;
	$this->boca_id = NULL;
	$this->capacidad_id = NULL;
	$this->producto_descripcion_i = NULL;
	$this->producto_nombre_i = NULL;
	$this->producto_terminado_i = NULL;
	$this->producto_anotacion_i = NULL;

}

//Functiones GET

function getProducto_codigo(){	
	return $this->producto_codigo;
}

function getProducto_descripcion(){	
	return $this->producto_descripcion;
}

function getProducto_nombre(){	
	return $this->producto_nombre;
}

function getCategoria_id(){	
	return $this->categoria_id;
}

function getSublinea_id(){	
	return $this->sublinea_id;
}

function getForma_id(){	
	return $this->forma_id;
}

function getProducto_atributo1(){	
	return $this->producto_atributo1;
}

function getProducto_atributo2(){	
	return $this->producto_atributo2;
}

function getProducto_entradas(){	
	return $this->producto_entradas;
}

function getTamano_id(){	
	return $this->tamano_id;
}

function getProducto_capacidad(){	
	return $this->producto_capacidad;
}

function getProducto_unidadCap(){	
	return $this->producto_unidadCap;
}

function getMaterial_id(){	
	return $this->material_id;
}

function getColor_id(){	
	return $this->color_id;
}

function getProducto_boca(){	
	return $this->producto_boca;
}

function getProducto_unidadBoca(){	
	return $this->producto_unidadBoca;
}

function getProducto_peso(){	
	return $this->producto_peso;
}

function getProducto_terminado(){	
	return $this->producto_terminado;
}

function getLinner_id(){	
	return $this->linner_id;
}

function getFalda_id(){	
	return $this->falda_id;
}

function getProducto_cavidades(){	
	return $this->producto_cavidades;
}

function getProducto_anotacion(){	
	return $this->producto_anotacion;
}

function getClase_id(){	
	return $this->clase_id;
}

function getProducto_imagen(){	
	return $this->producto_imagen;
}

function getBoca_id(){	
	return $this->boca_id;
}

function getCapacidad_id(){	
	return $this->capacidad_id;
}

function getProducto_descripcion_i(){
	return $this->producto_descripcion_i;
}

function getProducto_nombre_i(){
	return $this->producto_nombre_i;
}

function getProducto_terminado_i(){
	return $this->producto_terminado_i;
}

function getProducto_anotacion_i(){
	return $this->producto_anotacion_i;
}



//Funciones SET
	
function setProducto_codigo($producto_codigo){
	$this->producto_codigo = $producto_codigo;
}

function setProducto_descripcion($producto_descripcion){
	$this->producto_descripcion = $producto_descripcion;
}

function setProducto_nombre($producto_nombre){
	$this->producto_nombre = $producto_nombre;
}

function setCategoria_id($categoria_id){
	$this->categoria_id = $categoria_id;
}

function setSublinea_id($sublinea_id){
	$this->sublinea_id = $sublinea_id;
}

function setForma_id($forma_id){
	$this->forma_id = $forma_id;
}

function setProducto_atributo1($producto_atributo1){
	$this->producto_atributo1 = $producto_atributo1;
}

function setProducto_atributo2($producto_atributo2){
	$this->producto_atributo2 = $producto_atributo2;
}

function setProducto_entradas($producto_entradas){
	$this->producto_entradas = $producto_entradas;
}

function setTamano_id($tamano_id){
	$this->tamano_id = $tamano_id;
}

function setProducto_capacidad($producto_capacidad){
	$this->producto_capacidad = $producto_capacidad;
}

function setProducto_unidadCap($producto_unidadCap){
	$this->producto_unidadCap = $producto_unidadCap;
}

function setMaterial_id($material_id){
	$this->material_id = $material_id;
}

function setColor_id($color_id){
	$this->color_id = $color_id;
}

function setProducto_boca($producto_boca){
	$this->producto_boca = $producto_boca;
}

function setProducto_unidadBoca($producto_unidadBoca){
	$this->producto_unidadBoca = $producto_unidadBoca;
}

function setProducto_peso($producto_peso){
	$this->producto_peso = $producto_peso;
}

function setProducto_terminado($producto_terminado){
	$this->producto_terminado = $producto_terminado;
}

function setLinner_id($linner_id){
	$this->linner_id = $linner_id;
}

function setFalda_id($falda_id){
	$this->falda_id = $falda_id;
}

function setProducto_cavidades($producto_cavidades){
	$this->producto_cavidades = $producto_cavidades;
}

function setProducto_anotacion($producto_anotacion){
	$this->producto_anotacion = $producto_anotacion;
}

function setClase_id($clase_id){
	$this->clase_id = $clase_id;
}

function setProducto_imagen($producto_imagen){
	$this->producto_imagen = $producto_imagen;
}

function setBoca_id($boca_id){
	$this->boca_id = $boca_id;
}

function setCapacidad_id($capacidad_id){
	$this->capacidad_id = $capacidad_id;
}

function setProducto_descripcion_i($producto_descripcion_i){
	$this->producto_descripcion_i = $producto_descripcion_i;
}

function setProducto_nombre_i($producto_nombre_i){
	$this->producto_nombre_i = $producto_nombre_i;
}

function setProducto_terminado_i($producto_terminado_i){
	$this->producto_terminado_i = $producto_terminado_i;
}

function setProducto_anotacion_i($producto_anotacion_i){
	$this->producto_anotacion_i = $producto_anotacion_i;
}



}

?>
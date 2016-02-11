<?php


class galeria{
    private $id;
    private $titulo;
    private $descripcion;
    private $thumbnail;
    private $imagen;
    private $categoria;


    function __construct(){
        $this->id = 0;
        $this->titulo = 'null';
        $this->descripcion = 'null';
        $this->thumbnail = 'null';
        $this->imagen = 'null';
        $this->categoria = 'null';
    }

    //GET'S & SET'S
    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function setTitulo($t){
        $this->titulo = $t;
    }

    function getTitulo(){
        return $this->titulo;
    }

    function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	
	function getDescripcion(){
		return $this->descripcion;
	}
	
	function setThumbnail($thumbnail){
		$this->thumbnail = $thumbnail;
	}
	
	function getThumbnail(){
		return $this->thumbnail;
	}
	
	function setImagen($imagen){
		$this->imagen = $imagen;
	}
	
	function getImagen(){
		return $this->imagen;
	}
	
	function setCategoria($categoria){
		$this->categoria = $categoria;
	}
	
	function getCategoria(){
		return $this->categoria;
	}
}

?>
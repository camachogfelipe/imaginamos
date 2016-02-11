<?php
class terminos{
    private $id;
	private $pdf;
   
    function __construct(){
        $this->id = 0;
		$this->pdf = 'null';
		
    }

    //GET'S & SET'S
    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }
	function setNombre($t){
        $this->nombre = $t;
    }

	function setPdf($t){
        $this->pdf = $t;
    }

    function getPdf(){
        return $this->pdf;
    }
}
?>
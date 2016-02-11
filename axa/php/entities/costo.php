<?php
class costo{
    private $idtbl_costos;
    private $descripciontbl_costos;
	
   
    function __construct(){
        $this->idtbl_costos = NULL;
        $this->descripciontbl_costos = NULL;
		
        
      
    }

    //GET'S & SET'S
   
    public function getIdtbl_costos() {
        return $this->idtbl_costos;
    }

    public function setIdtbl_costos($idtbl_costos) {
        $this->idtbl_costos = $idtbl_costos;
    }

    public function getDescripciontbl_costos() {
        return $this->descripciontbl_costos;
    }

    public function setDescripciontbl_costos($descripciontbl_costos) {
        $this->descripciontbl_costos = $descripciontbl_costos;
    }

    

}
?>
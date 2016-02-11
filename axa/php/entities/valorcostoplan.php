<?php
class valorcostoplan{
    private $idtbl_valorcosto;
    private $idtbl_plan;
	private $idtbl_costos;
    private $valortbl_valorcosto;
	
   
    function __construct(){
        $this->idtbl_valorcosto = NULL;
        $this->idtbl_plan = NULL;
		$this->idtbl_costos = NULL;
        $this->valortbl_valorcosto = NULL;
		
      
    }

    //GET'S & SET'S
   
	
    public function getIdtbl_valorcosto() {
        return $this->idtbl_valorcosto;
    }

    public function setIdtbl_valorcosto($idtbl_valorcosto) {
        $this->idtbl_valorcosto = $idtbl_valorcosto;
    }

    public function getIdtbl_plan() {
        return $this->idtbl_plan;
    }

    public function setIdtbl_plan($idtbl_plan) {
        $this->idtbl_plan = $idtbl_plan;
    }

    public function getIdtbl_costos() {
        return $this->idtbl_costos;
    }

    public function setIdtbl_costos($idtbl_costos) {
        $this->idtbl_costos = $idtbl_costos;
    }

    public function getValortbl_valorcosto() {
        return $this->valortbl_valorcosto;
    }

    public function setValortbl_valorcosto($valortbl_valorcosto) {
        $this->valortbl_valorcosto = $valortbl_valorcosto;
    }


   
}
?>
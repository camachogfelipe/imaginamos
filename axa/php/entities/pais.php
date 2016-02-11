<?php
class pais{
    private $idtbl_destino;
    private $descripciontbl_destino;
	
	
   function __construct(){
        $this->idtbl_restircpaises = NULL;
        $this->descripciontbl_destino = NULL;
    }
    //GET'S & SET'S
   
    public function getIdtbl_destino() {
        return $this->idtbl_destino;
    }

    public function setIdtbl_destino($idtbl_destino) {
        $this->idtbl_destino = $idtbl_destino;
    }

    public function getDescripciontbl_destino() {
        return $this->descripciontbl_destino;
    }

    public function setDescripciontbl_destino($descripciontbl_destino) {
        $this->descripciontbl_destino = $descripciontbl_destino;
    }
   
}
?>
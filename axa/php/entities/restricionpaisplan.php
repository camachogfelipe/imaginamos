<?php
class restricionpaisplan{
    private $idtbl_restircpaises;
    private $tbl_plan_idtbl_plan;
	private $tbl_destino_idtbl_destino;
  
   
    function __construct(){
        $this->idtbl_restircpaises = NULL;
        $this->tbl_plan_idtbl_plan = NULL;
		$this->tbl_destino_idtbl_destino = NULL;
    }

    //GET'S & SET'S
   
    public function getIdtbl_restircpaises() {
        return $this->idtbl_restircpaises;
    }

    public function setIdtbl_restircpaises($idtbl_restircpaises) {
        $this->idtbl_restircpaises = $idtbl_restircpaises;
    }

    public function getTbl_plan_idtbl_plan() {
        return $this->tbl_plan_idtbl_plan;
    }

    public function setTbl_plan_idtbl_plan($tbl_plan_idtbl_plan) {
        $this->tbl_plan_idtbl_plan = $tbl_plan_idtbl_plan;
    }

    public function getTbl_destino_idtbl_destino() {
        return $this->tbl_destino_idtbl_destino;
    }

    public function setTbl_destino_idtbl_destino($tbl_destino_idtbl_destino) {
        $this->tbl_destino_idtbl_destino = $tbl_destino_idtbl_destino;
    }
 
}
?>
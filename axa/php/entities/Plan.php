<?php
class plan{
    private $idtbl_plan;
    private $descripciontbl_plan;
	private $productoanualtbl_plan;
    private $diasmaxtbl_plan;
	private $edadmintbl_plan;
	private $edamaxtbl_plan;
	private $valordiaAddtbl_plan;
	
   
    function __construct(){
        $this->idtbl_plan = NULL;
        $this->descripciontbl_plan = NULL;
		$this->productoanualtbl_plan = NULL;
        $this->diasmaxtbl_plan = NULL;
		$this->edadmintbl_plan = NULL;
        $this->edamaxtbl_plan = NULL;
		$this->valordiaAddtbl_plan = NULL;
      
    }

    //GET'S & SET'S
    public function getIdtbl_plan() {
        return $this->idtbl_plan;
    }

    public function setIdtbl_plan($idtbl_plan) {
        $this->idtbl_plan = $idtbl_plan;
    }

    public function getDescripciontbl_plan() {
        return $this->descripciontbl_plan;
    }

    public function setDescripciontbl_plan($descripciontbl_plan) {
        $this->descripciontbl_plan = $descripciontbl_plan;
    }

    public function getProductoanualtbl_plan() {
        return $this->productoanualtbl_plan;
    }

    public function setProductoanualtbl_plan($productoanualtbl_plan) {
        $this->productoanualtbl_plan = $productoanualtbl_plan;
    }

    public function getDiasmaxtbl_plan() {
        return $this->diasmaxtbl_plan;
    }

    public function setDiasmaxtbl_plan($diasmaxtbl_plan) {
        $this->diasmaxtbl_plan = $diasmaxtbl_plan;
    }

    public function getEdadmintbl_plan() {
        return $this->edadmintbl_plan;
    }

    public function setEdadmintbl_plan($edadmintbl_plan) {
        $this->edadmintbl_plan = $edadmintbl_plan;
    }

    public function getEdamaxtbl_plan() {
        return $this->edamaxtbl_plan;
    }

    public function setEdamaxtbl_plan($edamaxtbl_plan) {
        $this->edamaxtbl_plan = $edamaxtbl_plan;
    }
	public function getValordiaAddtbl_plan() {
        return $this->valordiaAddtbl_plan;
    }

    public function setValordiaAddtbl_plan($valordiaAddtbl_plan) {
        $this->valordiaAddtbl_plan = $valordiaAddtbl_plan;
    }

}
?>
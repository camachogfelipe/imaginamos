<?php

class venta {

    private $idtbl_ventas;
    private $consecutivotbl_ventas;
    private $fechasalidatbl_ventas;
    private $fecharegresotbl_ventas;
    private $diasviajetbl_ventas;
    private $canalventatbl_ventas;
    private $fechaventatbl_ventas;
    private $valortbl_ventas;
    private $observacionestbl_ventas;
    private $terminostbl_ventas;
    private $tbl_pasajeros_idtbl_pasajeros;
    private $tbl_plan_idtbl_plan;
    private $tbl_destino_idtbl_destino;
    private $reftbl_ventas;
    private $refTransacciontbl_ventas;
    private $pagoonlinetbl_ventas;
    private $redencion;

    function __construct() {
        $this->idtbl_ventas = NULL;
        $this->consecutivotbl_ventas = NULL;
        $this->fechasalidatbl_ventas = NULL;
        $this->fecharegresotbl_ventas = NULL;
        $this->diasviajetbl_ventas = NULL;
        $this->canalventatbl_ventas = NULL;
        $this->fechaventatbl_ventas = NULL;
        $this->valortbl_ventas = NULL;
        $this->observacionestbl_ventas = NULL;
        $this->terminostbl_ventas = NULL;
        $this->tbl_pasajeros_idtbl_pasajeros = NULL;
        $this->tbl_plan_idtbl_plan = NULL;
        $this->tbl_destino_idtbl_destino = NULL;
        $this->reftbl_ventas = NULL;
        $this->refTransacciontbl_ventas = NULL;
        $this->pagoonlinetbl_ventas = NULL;
        $this->redencion = NULL;
    }

    //GET'S & SET'S

    public function getIdtbl_ventas() {
        return $this->idtbl_ventas;
    }

    public function setIdtbl_ventas($idtbl_ventas) {
        $this->idtbl_ventas = $idtbl_ventas;
    }

    public function getConsecutivotbl_ventas() {
        return $this->consecutivotbl_ventas;
    }

    public function setConsecutivotbl_ventas($consecutivotbl_ventas) {
        $this->consecutivotbl_ventas = $consecutivotbl_ventas;
    }

    public function getFechasalidatbl_ventas() {
        return $this->fechasalidatbl_ventas;
    }

    public function setFechasalidatbl_ventas($fechasalidatbl_ventas) {
        $this->fechasalidatbl_ventas = $fechasalidatbl_ventas;
    }

    public function getFecharegresotbl_ventas() {
        return $this->fecharegresotbl_ventas;
    }

    public function setFecharegresotbl_ventas($fecharegresotbl_ventas) {
        $this->fecharegresotbl_ventas = $fecharegresotbl_ventas;
    }

    public function getDiasviajetbl_ventas() {
        return $this->diasviajetbl_ventas;
    }

    public function setDiasviajetbl_ventas($diasviajetbl_ventas) {
        $this->diasviajetbl_ventas = $diasviajetbl_ventas;
    }

    public function getCanalventatbl_ventas() {
        return $this->canalventatbl_ventas;
    }

    public function setCanalventatbl_ventas($canalventatbl_ventas) {
        $this->canalventatbl_ventas = $canalventatbl_ventas;
    }

    public function getFechaventatbl_ventas() {
        return $this->fechaventatbl_ventas;
    }

    public function setFechaventatbl_ventas($fechaventatbl_ventas) {
        $this->fechaventatbl_ventas = $fechaventatbl_ventas;
    }

    public function getValortbl_ventas() {
        return $this->valortbl_ventas;
    }

    public function setValortbl_ventas($valortbl_ventas) {
        $this->valortbl_ventas = $valortbl_ventas;
    }

    public function getObservacionestbl_ventas() {
        return $this->observacionestbl_ventas;
    }

    public function setObservacionestbl_ventas($observacionestbl_ventas) {
        $this->observacionestbl_ventas = $observacionestbl_ventas;
    }

    public function getTerminostbl_ventas() {
        return $this->terminostbl_ventas;
    }

    public function setTerminostbl_ventas($terminostbl_ventas) {
        $this->terminostbl_ventas = $terminostbl_ventas;
    }

    public function getTbl_pasajeros_idtbl_pasajeros() {
        return $this->tbl_pasajeros_idtbl_pasajeros;
    }

    public function setTbl_pasajeros_idtbl_pasajeros($tbl_pasajeros_idtbl_pasajeros) {
        $this->tbl_pasajeros_idtbl_pasajeros = $tbl_pasajeros_idtbl_pasajeros;
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

    public function getReftbl_ventas() {
        return $this->reftbl_ventas;
    }

    public function setReftbl_ventas($reftbl_ventas) {
        $this->reftbl_ventas = $reftbl_ventas;
    }

    public function getRefTransacciontbl_ventas() {
        return $this->refTransacciontbl_ventas;
    }

    public function setRefTransacciontbl_ventas($refTransacciontbl_ventas) {
        $this->refTransacciontbl_ventas = $refTransacciontbl_ventas;
    }

    public function getPagoonlinetbl_ventas() {
        return $this->pagoonlinetbl_ventas;
    }

    public function setPagoonlinetbl_ventas($pagoonlinetbl_ventas) {
        $this->pagoonlinetbl_ventas = $pagoonlinetbl_ventas;
    }
    
    public function setRedencion($redencion) {
        $this->redencion = $redencion;
    }
    
     public function getRedencion() {
        return $this->redencion;
    }

}

?>
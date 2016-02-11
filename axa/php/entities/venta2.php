<?php

class valorcostoplan {

    //campos de la consulta

    private $idtbl_ventas;
    private $consecutivotbl_ventas;
    private $fechasalidatbl_ventas;
    private $fecharegresotbl_ventas;
    private $diasviajetbl_ventas;
    private $canalventatbl_ventas;
    private $fechaventatbl_ventas;
    private $valortbl_ventas;
    private $descripciontbl_destino;
    private $nombretbl_pasajeros;
    private $apellidostbl_pasajeros;
    private $identeficaciontbl_pasajeros;
    private $emailtbl_pasajeros;
    private $fechanacimientotbl_pasajeros;
    private $edad;
    private $descripciontbl_plan;
    private $observacionestbl_ventas;
    private $terminostbl_ventas;
    private $reftbl_ventas;
    private $refTransacciontbl_ventas;
    private $pagoonlinetbl_ventas;
     private $redencion;

    function __construct() {

        //inicializo las variables

        $this->idtbl_ventas = NULL;
        $this->consecutivotbl_ventas = NULL;
        $this->fechasalidatbl_ventas = NULL;
        $this->fecharegresotbl_ventas = NULL;
        $this->diasviajetbl_ventas = NULL;
        $this->canalventatbl_ventas = NULL;
        $this->fechaventatbl_ventas = NULL;
        $this->valortbl_ventas = NULL;
        $this->descripciontbl_destino = NULL;
        $this->nombretbl_pasajeros = NULL;
        $this->apellidostbl_pasajeros = NULL;
        $this->identeficaciontbl_pasajeros = NULL;
        $this->emailtbl_pasajeros = NULL;
        $this->fechanacimientotbl_pasajeros = NULL;
        $this->edad = NULL;
        $this->descripciontbl_plan = NULL;
        $this->observacionestbl_ventas = NULL;
        $this->terminostbl_ventas = NULL;
        $this->reftbl_ventas = NULL;
        $this->refTransacciontbl_ventas = NULL;
        $this->pagoonlinetbl_ventas = NULL;
        $this->redencion = NULL;
    }

    //GET'S & SET'S


    public function getIidtbl_ventas() {
        return $this->idtbl_ventas;
    }

    public function setIidtbl_ventas() {
        $this->idtbl_ventas;
    }

    public function getconsecutivotbl_ventas() {
        return $this->consecutivotbl_ventas;
    }

    public function setconsecutivotbl_ventas() {
        $this->consecutivotbl_ventas;
    }

    public function getfechasalidatbl_ventas() {
        return $this->fechasalidatbl_ventas;
    }

    public function setfechasalidatbl_ventas() {
        $this->fechasalidatbl_ventas;
    }

    public function getfecharegresotbl_ventas() {
        return $this->fecharegresotbl_ventas;
    }

    public function setfecharegresotbl_ventas() {
        $this->fecharegresotbl_ventas;
    }

    public function getdiasviajetbl_ventas() {
        return $this->diasviajetbl_ventas;
    }

    public function setdiasviajetbl_ventas() {
        $this->diasviajetbl_ventas;
    }

    //5

    public function getcanalventatbl_ventas() {
        return $this->canalventatbl_ventas;
    }

    public function setcanalventatbl_ventas() {
        $this->canalventatbl_ventas;
    }

    public function getIfechaventatbl_ventas() {
        return $this->fechaventatbl_ventas;
    }

    public function setfechaventatbl_ventas() {
        $this->fechaventatbl_ventas;
    }

    public function getvalortbl_ventas() {
        return $this->valortbl_ventas;
    }

    public function setvalortbl_ventas() {
        $this->valortbl_ventas;
    }

    public function getdescripciontbl_destino() {
        return $this->descripciontbl_destino;
    }

    public function setdescripciontbl_destino() {
        $this->descripciontbl_destino;
    }

    public function getnombretbl_pasajeros() {
        return $this->nombretbl_pasajeros;
    }

    public function setnombretbl_pasajeros() {
        $this->nombretbl_pasajeros;
    }

    //10
    public function getapellidostbl_pasajeros() {
        return $this->apellidostbl_pasajeros;
    }

    public function setapellidostbl_pasajeros() {
        $this->apellidostbl_pasajeros;
    }

    public function getidenteficaciontbl_pasajeros() {
        return $this->identeficaciontbl_pasajeros;
    }

    public function setidenteficaciontbl_pasajeros() {
        $this->identeficaciontbl_pasajeros;
    }

    public function getemailtbl_pasajeros() {
        return $this->emailtbl_pasajeros;
    }

    public function setemailtbl_pasajeros() {
        $this->emailtbl_pasajeros;
    }

    public function getfechanacimientotbl_pasajeros() {
        return $this->fechanacimientotbl_pasajeros;
    }

    public function setfechanacimientotbl_pasajeros() {
        $this->fechanacimientotbl_pasajeros;
    }

    public function getedad() {
        return $this->edad;
    }

    public function setedad() {
        $this->edad;
    }

    //15

    public function getescripciontbl_plan() {
        return $this->escripciontbl_plan;
    }

    public function setescripciontbl_plan() {
        $this->escripciontbl_plan;
    }

    public function getobservacionestbl_ventas() {
        return $this->observacionestbl_ventas;
    }

    public function setobservacionestbl_ventas() {
        $this->observacionestbl_ventas;
    }

    public function getterminostbl_ventas() {
        return $this->terminostbl_ventas;
    }

    public function setterminostbl_ventas() {
        $this->terminostbl_ventas;
    }

    public function getreftbl_ventas() {
        return $this->reftbl_ventas;
    }

    public function setreftbl_ventas() {
        $this->reftbl_ventas;
    }

    public function getTransacciontbl_ventas() {
        return $this->Transacciontbl_ventas;
    }

    public function setTransacciontbl_ventas() {
        $this->Transacciontbl_ventas;
    }

    //20

    public function getpagoonlinetbl_ventas() {
        return $this->pagoonlinetbl_ventas;
    }

    public function setpagoonlinetbl_ventas() {
        $this->pagoonlinetbl_ventas;
    }

    //21

    public function setRedencion($redencion) {
        $this->redencion = $redencion;
    }

    public function getRedencion() {
        return $this->redencion;
    }

}

?>
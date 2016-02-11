<?php


class pasajero{
    private $idtbl_pasajeros;
    private $nombretbl_pasajeros;
    private $apellidostbl_pasajeros;
    private $identeficaciontbl_pasajeros;
	private $emailtbl_pasajeros;
    private $fechanacimientotbl_pasajeros;
	private $edad;
	

    function __construct(){
        $this->idtbl_pasajeros = NULL;
        $this->nombretbl_pasajeros = NULL;
		$this->apellidostbl_pasajeros = NULL;
        $this->identeficaciontbl_pasajeros = NULL;
		$this->emailtbl_pasajeros = NULL;
        $this->fechanacimientotbl_pasajeros = NULL;
		$this->edad = NULL;
    }

    //GET'S & SET'S
   
    public function getIdtbl_pasajeros() {
        return $this->idtbl_pasajeros;
    }

    public function setIdtbl_pasajeros($idtbl_pasajeros) {
        $this->idtbl_pasajeros = $idtbl_pasajeros;
    }

    public function getNombretbl_pasajeros() {
        return $this->nombretbl_pasajeros;
    }

    public function setNombretbl_pasajeros($nombretbl_pasajeros) {
        $this->nombretbl_pasajeros = $nombretbl_pasajeros;
    }

    public function getApellidostbl_pasajeros() {
        return $this->apellidostbl_pasajeros;
    }

    public function setApellidostbl_pasajeros($apellidostbl_pasajeros) {
        $this->apellidostbl_pasajeros = $apellidostbl_pasajeros;
    }

    public function getIdenteficaciontbl_pasajeros() {
        return $this->identeficaciontbl_pasajeros;
    }

    public function setIdenteficaciontbl_pasajeros($identeficaciontbl_pasajeros) {
        $this->identeficaciontbl_pasajeros = $identeficaciontbl_pasajeros;
    }

    public function getEmailtbl_pasajeros() {
        return $this->emailtbl_pasajeros;
    }

    public function setEmailtbl_pasajeros($emailtbl_pasajeros) {
        $this->emailtbl_pasajeros = $emailtbl_pasajeros;
    }

    public function getFechanacimientotbl_pasajeros() {
        return $this->fechanacimientotbl_pasajeros;
    }

    public function setFechanacimientotbl_pasajeros($fechanacimientotbl_pasajeros) {
        $this->fechanacimientotbl_pasajeros = $fechanacimientotbl_pasajeros;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }




}

?>
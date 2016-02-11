<?php


class user{
    private $id;
    private $login;
    private $pass;
    private $nombre;
	private $apellidos;
    private $email;
	private $empresa;
	private $cargo;
    private $dir;
    private $tel;
    private $pais;
    private $ciudad;
    private $temporal;
	private $activo;
	private $confirmado;
    private $isadmin;
    private $registerDate;

    function __construct(){
        $this->id = 0;
        $this->login = 'null';
    }

    //GET'S & SET'S
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
	
	public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


	public function getDir() {
        return $this->dir;
    }

    public function setDir($dir) {
        $this->dir = $dir;
    }

    public function getTel() {
        return $this->tel;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }
	public function getEmpresa(){
		return $this->empresa;
	}
	
	public function setEmpresa($empresa){
		$this->empresa = $empresa;
	}
	
	public function getCargo(){
		return $this->cargo;
	}

	public function setCargo($cargo){
		$this->cargo = $cargo;
	}

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }
	
	public function getCiudad() {
        return $this->ciudad;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
	}

    public function getTemporal(){
		return $this->temporal;
	}
	
	public function setTemporal($temporal){
		$this->temporal = $temporal;
	}
	
	public function getActivo(){
		return $this->activo;
	}
	
	public function setActivo($activo){
		$this->activo = $activo;
	}
	
	public function getConfirmado(){
		return $this->confirmado;
	}
	
	public function setConfirmado($confirmado){
		$this->confirmado = $confirmado;
	}
	
	public function getIsadmin() {
        return $this->isadmin;
    }

    public function setIsadmin($isadmin) {
        $this->isadmin = $isadmin;
    }
    
    public function getRegisterDate() {
        return $this->registerDate;
    }

     public function setRegisterDate($rd){
        $fechaYhora = explode(" ", $rd);
        $fecha = explode("-", $fechaYhora[0]);
        $hora = explode(":", $fechaYhora[1]);
        $this->registerDate = $fecha[2].'/'.$fecha[1].'/'.$fecha[0];
    }




}

?>
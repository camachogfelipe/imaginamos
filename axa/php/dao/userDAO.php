<?php

class userDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function save($user){

        //$nuevaUsuario = new user;
        $nuevaUsuario = $user;
		
		$sql = 'SELECT * from usuario WHERE email = "'.mysql_real_escape_string($nuevaUsuario->getEmail()).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		
		if($numregistros > 0){
			return false;
			exit;
		}
		
        $querty =   "insert into usuario
                    (login, pass, nombre, apellidos, email, empresa, cargo, direccion, telefono, 
					 pais, ciudad, temporal, activo, confirmado, isadmin)
                    values(
                    \"".mysql_real_escape_string($nuevaUsuario->getEmail())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getPass())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getNombre())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getApellidos())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getEmail())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getEmpresa())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getCargo())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getDir())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getTel())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getPais())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getCiudad())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getTemporal())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getActivo())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getConfirmado())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getIsadmin())."\"
                    )";

        //echo $querty;
        //echo "<br /><br /><br /><br />";
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveUsuario): '.mysql_error();
            return false;
        }

        return true;

    }

    function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }


    function getById($id){

        $sql = 'SELECT * from usuario WHERE id = "'.$id.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }

        $i = 0;
        $user = new user;
        $user->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
        $user->setLogin($this->daoConnection->ObjetoConsulta2[$i][1]);
        $user->setPass($this->daoConnection->ObjetoConsulta2[$i][2]);
        $user->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
		$user->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
        $user->setEmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$user->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][6]);
		$user->setCargo($this->daoConnection->ObjetoConsulta2[$i][7]);
		$user->setDir($this->daoConnection->ObjetoConsulta2[$i][8]);
		$user->setTel($this->daoConnection->ObjetoConsulta2[$i][9]);
        $user->setPais($this->daoConnection->ObjetoConsulta2[$i][10]);        
        $user->setCiudad($this->daoConnection->ObjetoConsulta2[$i][11]);
		$user->setTemporal($this->daoConnection->ObjetoConsulta2[$i][12]);
		$user->setActivo($this->daoConnection->ObjetoConsulta2[$i][13]);
		$user->setConfirmado($this->daoConnection->ObjetoConsulta2[$i][14]);
        $user->setIsadmin($this->daoConnection->ObjetoConsulta2[$i][15]);
        $user->setRegisterDate($this->daoConnection->ObjetoConsulta2[$i][16]);
        return $user;
    }

    function getByCode($code){

        $sql = 'SELECT * from usuario WHERE temporal = "'.$code.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }

        $i = 0;
        $user = new user;
        $user->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
        $user->setLogin($this->daoConnection->ObjetoConsulta2[$i][1]);
        $user->setPass($this->daoConnection->ObjetoConsulta2[$i][2]);
        $user->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
		$user->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
        $user->setEmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$user->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][6]);
		$user->setCargo($this->daoConnection->ObjetoConsulta2[$i][7]);
		$user->setDir($this->daoConnection->ObjetoConsulta2[$i][8]);
		$user->setTel($this->daoConnection->ObjetoConsulta2[$i][9]);
        $user->setPais($this->daoConnection->ObjetoConsulta2[$i][10]);        
        $user->setCiudad($this->daoConnection->ObjetoConsulta2[$i][11]);
		$user->setTemporal($this->daoConnection->ObjetoConsulta2[$i][12]);
		$user->setActivo($this->daoConnection->ObjetoConsulta2[$i][13]);
		$user->setConfirmado($this->daoConnection->ObjetoConsulta2[$i][14]);
        $user->setIsadmin($this->daoConnection->ObjetoConsulta2[$i][15]);
        $user->setRegisterDate($this->daoConnection->ObjetoConsulta2[$i][16]);
        return $user;
    }

    function getUserByLogin($login){

        $sql = 'SELECT * from usuario WHERE login = "'.$login.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }

        $i = 0;
        $user = new user;
        $user->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
        $user->setLogin($this->daoConnection->ObjetoConsulta2[$i][1]);
        $user->setPass($this->daoConnection->ObjetoConsulta2[$i][2]);
        $user->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
		$user->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
        $user->setEmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$user->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][6]);
		$user->setCargo($this->daoConnection->ObjetoConsulta2[$i][7]);
		$user->setDir($this->daoConnection->ObjetoConsulta2[$i][8]);
		$user->setTel($this->daoConnection->ObjetoConsulta2[$i][9]);
        $user->setPais($this->daoConnection->ObjetoConsulta2[$i][10]);        
        $user->setCiudad($this->daoConnection->ObjetoConsulta2[$i][11]);
		$user->setTemporal($this->daoConnection->ObjetoConsulta2[$i][12]);
		$user->setActivo($this->daoConnection->ObjetoConsulta2[$i][13]);
		$user->setConfirmado($this->daoConnection->ObjetoConsulta2[$i][14]);
        $user->setIsadmin($this->daoConnection->ObjetoConsulta2[$i][15]);
        $user->setRegisterDate($this->daoConnection->ObjetoConsulta2[$i][16]);
        return $user;
    }




    function getUserByEmail($email){

        $sql = 'SELECT * from usuario WHERE email = "'.$email.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }

        $i = 0;
        $user = new user;
        $user->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
        $user->setLogin($this->daoConnection->ObjetoConsulta2[$i][1]);
        $user->setPass($this->daoConnection->ObjetoConsulta2[$i][2]);
        $user->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
		$user->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
        $user->setEmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$user->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][6]);
		$user->setCargo($this->daoConnection->ObjetoConsulta2[$i][7]);
		$user->setDir($this->daoConnection->ObjetoConsulta2[$i][8]);
		$user->setTel($this->daoConnection->ObjetoConsulta2[$i][9]);
        $user->setPais($this->daoConnection->ObjetoConsulta2[$i][10]);        
        $user->setCiudad($this->daoConnection->ObjetoConsulta2[$i][11]);
		$user->setTemporal($this->daoConnection->ObjetoConsulta2[$i][12]);
		$user->setActivo($this->daoConnection->ObjetoConsulta2[$i][13]);
		$user->setConfirmado($this->daoConnection->ObjetoConsulta2[$i][14]);
        $user->setIsadmin($this->daoConnection->ObjetoConsulta2[$i][15]);
        $user->setRegisterDate($this->daoConnection->ObjetoConsulta2[$i][16]);
        return $user;
    }


    function getAdmin(){

        $sql = 'SELECT * from usuario WHERE isadmin = "1"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }

        for($i = 0; $i < $numregistros ; $i++){
            $user = new user;
            $user->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$user->setLogin($this->daoConnection->ObjetoConsulta2[$i][1]);
			$user->setPass($this->daoConnection->ObjetoConsulta2[$i][2]);
			$user->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
			$user->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
			$user->setEmail($this->daoConnection->ObjetoConsulta2[$i][5]);
			$user->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][6]);
			$user->setCargo($this->daoConnection->ObjetoConsulta2[$i][7]);
			$user->setDir($this->daoConnection->ObjetoConsulta2[$i][8]);
			$user->setTel($this->daoConnection->ObjetoConsulta2[$i][9]);
			$user->setPais($this->daoConnection->ObjetoConsulta2[$i][10]);        
			$user->setCiudad($this->daoConnection->ObjetoConsulta2[$i][11]);
			$user->setTemporal($this->daoConnection->ObjetoConsulta2[$i][12]);
			$user->setActivo($this->daoConnection->ObjetoConsulta2[$i][13]);
			$user->setConfirmado($this->daoConnection->ObjetoConsulta2[$i][14]);
			$user->setIsadmin($this->daoConnection->ObjetoConsulta2[$i][15]);
			$user->setRegisterDate($this->daoConnection->ObjetoConsulta2[$i][16]);
            $lista[$i] = $user;
        }
        return $lista;
    }
	function getChat(){

        $sql = 'SELECT * from usuario WHERE isadmin = "2"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }

        for($i = 0; $i < $numregistros ; $i++){
            $user = new user;
            $user->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$user->setLogin($this->daoConnection->ObjetoConsulta2[$i][1]);
			$user->setPass($this->daoConnection->ObjetoConsulta2[$i][2]);
			$user->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
			$user->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
			$user->setEmail($this->daoConnection->ObjetoConsulta2[$i][5]);
			$user->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][6]);
			$user->setCargo($this->daoConnection->ObjetoConsulta2[$i][7]);
			$user->setDir($this->daoConnection->ObjetoConsulta2[$i][8]);
			$user->setTel($this->daoConnection->ObjetoConsulta2[$i][9]);
			$user->setPais($this->daoConnection->ObjetoConsulta2[$i][10]);        
			$user->setCiudad($this->daoConnection->ObjetoConsulta2[$i][11]);
			$user->setTemporal($this->daoConnection->ObjetoConsulta2[$i][12]);
			$user->setActivo($this->daoConnection->ObjetoConsulta2[$i][13]);
			$user->setConfirmado($this->daoConnection->ObjetoConsulta2[$i][14]);
			$user->setIsadmin($this->daoConnection->ObjetoConsulta2[$i][15]);
			$user->setRegisterDate($this->daoConnection->ObjetoConsulta2[$i][16]);
            $lista[$i] = $user;
        }
        return $lista;
    }

    function gets($ll, $hl){

        $sql = 'SELECT * from usuario  ';
        $sql .= 'LIMIT '.$ll.','.$hl;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }

        for($i = 0; $i < $numregistros ; $i++){
            $user = new user;
            $user->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$user->setLogin($this->daoConnection->ObjetoConsulta2[$i][1]);
			$user->setPass($this->daoConnection->ObjetoConsulta2[$i][2]);
			$user->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
			$user->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
			$user->setEmail($this->daoConnection->ObjetoConsulta2[$i][5]);
			$user->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][6]);
			$user->setCargo($this->daoConnection->ObjetoConsulta2[$i][7]);
			$user->setDir($this->daoConnection->ObjetoConsulta2[$i][8]);
			$user->setTel($this->daoConnection->ObjetoConsulta2[$i][9]);
			$user->setPais($this->daoConnection->ObjetoConsulta2[$i][10]);        
			$user->setCiudad($this->daoConnection->ObjetoConsulta2[$i][11]);
			$user->setTemporal($this->daoConnection->ObjetoConsulta2[$i][12]);
			$user->setActivo($this->daoConnection->ObjetoConsulta2[$i][13]);
			$user->setConfirmado($this->daoConnection->ObjetoConsulta2[$i][14]);
			$user->setIsadmin($this->daoConnection->ObjetoConsulta2[$i][15]);
			$user->setRegisterDate($this->daoConnection->ObjetoConsulta2[$i][16]);
            $lista[$i] = $user;
        }
        return $lista;
    }



    function getsBySearch($order, $orderType, $ll, $hl, $param, $value){

        $sql = 'SELECT * from usuario WHERE ';
        $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$ll.','.$hl;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }

        for($i = 0; $i < $numregistros ; $i++){
            $user = new user;
            $user->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$user->setLogin($this->daoConnection->ObjetoConsulta2[$i][1]);
			$user->setPass($this->daoConnection->ObjetoConsulta2[$i][2]);
			$user->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
			$user->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
			$user->setEmail($this->daoConnection->ObjetoConsulta2[$i][5]);
			$user->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][6]);
			$user->setCargo($this->daoConnection->ObjetoConsulta2[$i][7]);
			$user->setDir($this->daoConnection->ObjetoConsulta2[$i][8]);
			$user->setTel($this->daoConnection->ObjetoConsulta2[$i][9]);
			$user->setPais($this->daoConnection->ObjetoConsulta2[$i][10]);        
			$user->setCiudad($this->daoConnection->ObjetoConsulta2[$i][11]);
			$user->setTemporal($this->daoConnection->ObjetoConsulta2[$i][12]);
			$user->setActivo($this->daoConnection->ObjetoConsulta2[$i][13]);
			$user->setConfirmado($this->daoConnection->ObjetoConsulta2[$i][14]);
			$user->setIsadmin($this->daoConnection->ObjetoConsulta2[$i][15]);
			$user->setRegisterDate($this->daoConnection->ObjetoConsulta2[$i][16]);
            $lista[$i] = $user;
        }
        return $lista;
    }



    function delete($id){

        $sql = 'Delete from usuario WHERE id = '.$id.' ';

		$this->daoConnection->consulta($sql);
    }

    function update($user){
		$passCrypt = mhash(MHASH_MD5, $user->getPass());
        $querty =   "UPDATE
                    usuario
                    SET
					pass = 
					\"".mysql_real_escape_string($passCrypt)."\",
					empresa = 
					\"".mysql_real_escape_string($user->getEmpresa())."\",
					cargo = 
					\"".mysql_real_escape_string($user->getCargo())."\",
					direccion = 
					\"".mysql_real_escape_string($user->getDir())."\",
					telefono = 
					\"".mysql_real_escape_string($user->getTel())."\",
					pais = 
					\"".mysql_real_escape_string($user->getPais())."\",
					ciudad = 
					\"".mysql_real_escape_string($user->getCiudad())."\",
                    activo =
                    \"".mysql_real_escape_string($user->getActivo())."\",
                    confirmado =
                    \"".mysql_real_escape_string($user->getConfirmado())."\"
                    WHERE id =
                    ".mysql_real_escape_string($user->getId())."
                    ";
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updateusuario): '.mysql_error();
            return false;
        }

        return true;
    }

    function updateUserPass($user){
        $uUser = new user;
        $uUser = $user;

        $querty =   "UPDATE
                    usuario
                    SET
                    pass =
                    \"".mysql_real_escape_string($uUser->getPass())."\"
                    WHERE id =
                    ".mysql_real_escape_string($uUser->getId())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updateUserPass): '.mysql_error();
            return false;
        }

        return true;
    }


    function total($opt = 0, $campo = 0, $valor = 0){

		if($opt == 0)
			$sql = 'select count(*) from usuario;';
		if($opt == 1)
			$sql = 'select count(*) from usuario where '.$campo.' LIKE "%'.$valor.'%";';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}

?>

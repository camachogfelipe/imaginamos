<?php

class pasajeroDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function save($pasajero){

        $nuevaUsuario = new pasajero;
        $nuevaUsuario = $pasajero;
		
				
        $querty =   "insert into tbl_pasajeros
                    (nombretbl_pasajeros, apellidostbl_pasajeros, identeficaciontbl_pasajeros, emailtbl_pasajeros, fechanacimientotbl_pasajeros, edad)
                    values(
                    \"".mysql_real_escape_string($nuevaUsuario->getNombretbl_pasajeros())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getApellidostbl_pasajeros())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getIdenteficaciontbl_pasajeros())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getEmailtbl_pasajeros())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getFechanacimientotbl_pasajeros())."\",
                    \"".mysql_real_escape_string($nuevaUsuario->getEdad())."\"
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

        $sql = 'SELECT * from tbl_pasajeros WHERE idtbl_pasajeros = "'.$id.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }

        $i = 0;
        $pasajero = new pasajero;
        $pasajero->setIdtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][0]);
        $pasajero->setNombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][1]);
        $pasajero->setApellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][2]);
        $pasajero->setIdenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][3]);
		$pasajero->setEmailtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][4]);
        $pasajero->setFechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][5]);
		$pasajero->setEdad($this->daoConnection->ObjetoConsulta2[$i][6]);
		
        return $pasajero;
    }

    function getByCode($code){

        $sql = 'SELECT * from tbl_pasajeros WHERE temporal = "'.$code.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }

        $i = 0;
        $pasajero = new pasajero;
        $pasajero->setIdtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][0]);
        $pasajero->setNombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][1]);
        $pasajero->setApellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][2]);
        $pasajero->setIdenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][3]);
		$pasajero->setEmailtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][4]);
        $pasajero->setFechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][5]);
		$pasajero->setEdad($this->daoConnection->ObjetoConsulta2[$i][6]);
        return $pasajero;
    }

    function getUserByLogin($login){

        $sql = 'SELECT * from tbl_pasajeros WHERE login = "'.$login.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }

        $i = 0;
        $pasajero = new pasajero;
        $pasajero->setIdtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][0]);
        $pasajero->setNombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][1]);
        $pasajero->setApellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][2]);
        $pasajero->setIdenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][3]);
		$pasajero->setEmailtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][4]);
        $pasajero->setFechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][5]);
		$pasajero->setEdad($this->daoConnection->ObjetoConsulta2[$i][6]);
        return $pasajero;
    }




    function getUserByEmail($email){

        $sql = 'SELECT * from tbl_pasajeros WHERE email = "'.$email.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }

        $i = 0;
        $pasajero = new pasajero;
        $pasajero->setIdtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][0]);
        $pasajero->setNombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][1]);
        $pasajero->setApellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][2]);
        $pasajero->setIdenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][3]);
		$pasajero->setEmailtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][4]);
        $pasajero->setFechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][5]);
		$pasajero->setEdad($this->daoConnection->ObjetoConsulta2[$i][6]);
        return $pasajero;
    }


    function getAdmin(){

        $sql = 'SELECT * from tbl_pasajeros WHERE isadmin = "1"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }

        for($i = 0; $i < $numregistros ; $i++){
            $pasajero = new pasajero;
            $pasajero->setIdtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][0]);
        $pasajero->setNombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][1]);
        $pasajero->setApellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][2]);
        $pasajero->setIdenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][3]);
		$pasajero->setEmailtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][4]);
        $pasajero->setFechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][5]);
		$pasajero->setEdad($this->daoConnection->ObjetoConsulta2[$i][6]);
            $lista[$i] = $pasajero;
        }
        return $lista;
    }
	function getChat(){

        $sql = 'SELECT * from tbl_pasajeros WHERE isadmin = "2"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }

        for($i = 0; $i < $numregistros ; $i++){
            $pasajero = new pasajero;
           $pasajero->setIdtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][0]);
        $pasajero->setNombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][1]);
        $pasajero->setApellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][2]);
        $pasajero->setIdenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][3]);
		$pasajero->setEmailtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][4]);
        $pasajero->setFechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][5]);
		$pasajero->setEdad($this->daoConnection->ObjetoConsulta2[$i][6]);
            $lista[$i] = $pasajero;
        }
        return $lista;
    }

    function gets($ll, $hl){

        $sql = 'SELECT * from tbl_pasajeros  ';
        $sql .= 'LIMIT '.$ll.','.$hl;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }

        for($i = 0; $i < $numregistros ; $i++){
            $pasajero = new pasajero;
            $pasajero->setIdtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][0]);
        $pasajero->setNombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][1]);
        $pasajero->setApellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][2]);
        $pasajero->setIdenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][3]);
		$pasajero->setEmailtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][4]);
        $pasajero->setFechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][5]);
		$pasajero->setEdad($this->daoConnection->ObjetoConsulta2[$i][6]);
            $lista[$i] = $pasajero;
        }
        return $lista;
    }



    function getsBySearch($order, $orderType, $ll, $hl, $param, $value){

        $sql = 'SELECT * from tbl_pasajeros WHERE ';
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
            $pasajero = new pasajero;
            $pasajero->setIdtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][0]);
        $pasajero->setNombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][1]);
        $pasajero->setApellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][2]);
        $pasajero->setIdenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][3]);
		$pasajero->setEmailtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][4]);
        $pasajero->setFechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][5]);
		$pasajero->setEdad($this->daoConnection->ObjetoConsulta2[$i][6]);
            $lista[$i] = $pasajero;
        }
        return $lista;
    }



    function delete($id){

        $sql = 'Delete from tbl_pasajeros WHERE id = '.$id.' ';

		$this->daoConnection->consulta($sql);
    }

    function update($pasajero){
		$passCrypt = mhash(MHASH_MD5, $pasajero->getPass());
        $querty =   "UPDATE
                    tbl_pasajeros
                    SET
					nombretbl_pasajeros = 
					\"".mysql_real_escape_string($pasajero->getNombretbl_pasajeros())."\",
					apellidostbl_pasajeros = 
					\"".mysql_real_escape_string($pasajero->getApellidostbl_pasajeros())."\",
					identeficaciontbl_pasajeros = 
					\"".mysql_real_escape_string($pasajero->getIdenteficaciontbl_pasajeros())."\",
					emailtbl_pasajeros = 
					\"".mysql_real_escape_string($pasajero->getEmailtbl_pasajeros())."\",
					fechanacimientotbl_pasajeros = 
					\"".mysql_real_escape_string($pasajero->getFechanacimientotbl_pasajeros())."\",
					edad = 
					\"".mysql_real_escape_string($pasajero->getEdad())."\"
                    WHERE idtbl_pasajeros =
                    ".mysql_real_escape_string($pasajero->getId())."
                    ";
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updatetbl_pasajeros): '.mysql_error();
            return false;
        }

        return true;
    }

    function updateUserPass($pasajero){
        $uUser = new pasajero;
        $uUser = $pasajero;

        $querty =   "UPDATE
                    tbl_pasajeros
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
			$sql = 'select count(*) from tbl_pasajeros;';
		if($opt == 1)
			$sql = 'select count(*) from tbl_pasajeros where '.$campo.' LIKE "%'.$valor.'%";';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}

?>

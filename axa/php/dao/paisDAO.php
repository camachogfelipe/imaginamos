<?php

class paisDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function savpais($pais){

        $newpais = new pais;
        $newpais = $pais;
		/*$sql = 'SELECT * from tbl_destino WHERE  valortbl_destino = "' . mysql_real_escape_string($newpais->getValortbl_destino()) . '"';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros > 0) {
            return 3;
            exit;
        }*/
        $querty =   "insert into tbl_destino
                    (descripciontbl_destino)
                    values(
                    
					\"".mysql_real_escape_string($newpais->getDescripciontbl_destino())."\"
					
                    )";
                 //echo $querty;
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (savepais): '.mysql_error();
            return 2;
        }
        return 1;
    }

    function getLastId(){
        //return "SELECT id FROM pais ORDER BY  id DESC LIMIT 1";
		return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	function getpaisbyCiudad($ciudadsel){

		$newpais = new pais;
        $sql = 'SELECT * FROM tbl_destino where valortbl_destino = "'.mysql_real_escape_string($ciudadsel).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newpais = new pais;
        if($numregistros == 0){
            return $newpais;
        }
        $newpais->setIdtbl_destino($this->daoConnection->ObjetoConsulta2[0][0]);
		$newpais->setDescripciontbl_destino($this->daoConnection->ObjetoConsulta2[0][1]);
        
        
        //$paisToPoblate = $newpais;
        return $newpais;
    }
    function getpais($id){

		$newpais = new pais;
        $sql = 'SELECT * FROM tbl_destino where idtbl_destino = "'.mysql_real_escape_string($id).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newpais = new pais;
        if($numregistros == 0){
            return $newpais;
        }
        $newpais->setIdtbl_destino($this->daoConnection->ObjetoConsulta2[0][0]);
		$newpais->setDescripciontbl_destino($this->daoConnection->ObjetoConsulta2[0][1]);
        
        
        //$paisToPoblate = $newpais;
        return $newpais;
    }

    function getpaises($order, $orderType, $l = 0, $h = 242){
        $sql = 'SELECT * FROM tbl_destino order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listapaises=array();

        if($numregistros == 0){
            return $listapaises;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newpais = new pais;
            $newpais->setIdtbl_destino($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newpais->setDescripciontbl_destino($this->daoConnection->ObjetoConsulta2[$i][1]);
			
            
            
            $listapaises[$i] = $newpais;
        }
        return $listapaises;
    }
	
	function getpaisesResctric($idplan,$order, $orderType, $l = 0, $h = 242){
        $sql = 'SELECT * FROM tbl_destino WHERE idtbl_destino NOT IN (SELECT tbl_destino_idtbl_destino FROM tbl_restircpaises WHERE tbl_plan_idtbl_plan = \''.mysql_real_escape_string($idplan) .'\' ) order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listapaises=array();

        if($numregistros == 0){
            return $listapaises;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newpais = new pais;
            $newpais->setIdtbl_destino($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newpais->setDescripciontbl_destino($this->daoConnection->ObjetoConsulta2[$i][1]);
			
            
            
            $listapaises[$i] = $newpais;
        }
        return $listapaises;
    }

    function getpaisesSearch($order, $orderType, $param, $value, $type = 0){

        $sql = 'SELECT * FROM tbl_destino WHERE ';
        if($type == 0)
            $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        if($type == 1)
            $sql .= $param.' = "'.mysql_real_escape_string($value).'" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listapaises=array();
        if($numregistros == 0){
            return $listapaises;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newpais = new pais;
            $newpais->setIdtbl_destino($this->daoConnection->ObjetoConsulta2[0][0]);
			$newpais->setDescripciontbl_destino($this->daoConnection->ObjetoConsulta2[$i][1]);
			
            
            
            $listapaises[$i] = $newpais;
        }
        return $listapaises;
    }

    function search($order, $orderType, $value){
        $sql = 'SELECT * FROM tbl_destino WHERE ';
        $sql .= 'texto LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listapaises=array();
        if($numregistros == 0){
            return $listapaises;
        }
	 for($i = 0; $i < $numregistros ; $i++){
            $newpais = new pais;
            $newpais->setIdtbl_destino($this->daoConnection->ObjetoConsulta2[0][0]);
			$newpais->setDescripciontbl_destino($this->daoConnection->ObjetoConsulta2[$i][1]);
			
            
            $listapaises[$i] = $newpais;
        }
        return $listapaises;
    }

    function updatepais($pais){
        $upais = new pais;
        $upais = $pais;
        $querty =   "UPDATE
                     tbl_destino
                    SET
                     descripciontbl_destino =
                    \"".mysql_real_escape_string($upais->getDescripciontbl_destino())."\"
					 WHERE idtbl_destino =
                    ".mysql_real_escape_string($upais->getIdtbl_destino())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updatepais): '.mysql_error();
            return false;
        }
        return true;
    }

    function deletepais($id){

        $sql = 'Delete FROM tbl_destino WHERE idtbl_destino = '.$id.' ';
		$this->daoConnection->consulta($sql);
    }

    function totalpaises($opt = 0, $campo = 0, $valor = 0){
		if($opt == 0)
			$sql = 'select count(*) FROM tbl_destino;';
		if($opt == 1)
			$sql = 'select count(*) FROM tbl_destino where '.$campo.' LIKE "%'.$valor.'%";';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}
?>

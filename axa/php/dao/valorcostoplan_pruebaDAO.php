<?php
class valorcostoplanDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function savvalorcostoplan($valorcostoplan){

        $newvalorcostoplan = new valorcostoplan;
        $newvalorcostoplan = $valorcostoplan;
		/*$sql = 'SELECT * from tbl_valorcosto WHERE  valortbl_valorcosto = "' . mysql_real_escape_string($newvalorcostoplan->getValortbl_valorcosto()) . '"';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros > 0) {
            return 3;
            exit;
        }*/
        $querty =   "insert into tbl_valorcosto
                    (idtbl_plan,idtbl_costos,valortbl_valorcosto)
                    values(
                    \"".mysql_real_escape_string($newvalorcostoplan->getIdtbl_plan())."\",
					\"".mysql_real_escape_string($newvalorcostoplan->getIdtbl_costos())."\",
					\"".mysql_real_escape_string($newvalorcostoplan->getValortbl_valorcosto())."\"
					
                    )";
                 //echo $querty;
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (savevalorcostoplan): '.mysql_error();
            return 2;
        }
        return 1;
    }

    function getLastId(){
        //return "SELECT id FROM valorcostoplan ORDER BY  id DESC LIMIT 1";
		return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	function getvalorcostoplanbyCiudad($ciudadsel){

		$newvalorcostoplan = new valorcostoplan;
        $sql = 'SELECT * FROM tbl_valorcosto where valortbl_valorcosto = "'.mysql_real_escape_string($ciudadsel).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newvalorcostoplan = new valorcostoplan;
        if($numregistros == 0){
            return $newvalorcostoplan;
        }
        $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][0]);
		$newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[0][1]);
        $newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[0][2]);
		$newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][3]);
        
        //$valorcostoplanToPoblate = $newvalorcostoplan;
        return $newvalorcostoplan;
    }
    function getvalorcostoplan($id){

		$newvalorcostoplan = new valorcostoplan;
        $sql = 'SELECT * FROM tbl_valorcosto where idtbl_valorcosto = "'.mysql_real_escape_string($id).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newvalorcostoplan = new valorcostoplan;
        if($numregistros == 0){
            return $newvalorcostoplan;
        }
        $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][0]);
		$newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[0][1]);
        $newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[0][2]);
		$newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][3]);
        
        //$valorcostoplanToPoblate = $newvalorcostoplan;
        return $newvalorcostoplan;
    }
	
	function getbyPlanid($idplan, $l = 0, $h = 200){
		$sql = 'SELECT descripciontbl_costos,valortbl_valorcosto,valordiaAddtbl_plan FROM `tbl_valorcosto` INNER JOIN tbl_costos ON tbl_valorcosto.idtbl_costos = tbl_costos.idtbl_costos INNER JOIN tbl_plan ON  tbl_valorcosto.idtbl_plan = tbl_plan.idtbl_plan WHERE tbl_plan.idtbl_plan = "'.mysql_real_escape_string($idplan) .'" AND valortbl_valorcosto <> "0"';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listavalorcostoplanes=array();

        if($numregistros == 0){
            return $listavalorcostoplanes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newvalorcostoplan = new valorcostoplan;
            $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][3]);
            
            
            $listavalorcostoplanes[$i] = $newvalorcostoplan;
        }
        return $listavalorcostoplanes;
    }
	

    function getvalorcostoplanes($order, $orderType, $l = 0, $h = 200){
        $sql = 'SELECT * FROM tbl_valorcosto order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listavalorcostoplanes=array();

        if($numregistros == 0){
            return $listavalorcostoplanes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newvalorcostoplan = new valorcostoplan;
             $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][3]);
            
            
            $listavalorcostoplanes[$i] = $newvalorcostoplan;
        }
        return $listavalorcostoplanes;
    }

    function getvalorcostoplanesSearch($order, $orderType, $param, $value, $type = 0){

        $sql = 'SELECT * FROM tbl_valorcosto WHERE ';
        if($type == 0)
            $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        if($type == 1)
            $sql .= $param.' = "'.mysql_real_escape_string($value).'" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listavalorcostoplanes=array();
        if($numregistros == 0){
            return $listavalorcostoplanes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newvalorcostoplan = new valorcostoplan;
            $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][0]);
			$newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][3]);
            
            
            $listavalorcostoplanes[$i] = $newvalorcostoplan;
        }
        return $listavalorcostoplanes;
    }

    function search($order, $orderType, $value){
        $sql = 'SELECT * FROM tbl_valorcosto WHERE ';
        $sql .= 'texto LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listavalorcostoplanes=array();
        if($numregistros == 0){
            return $listavalorcostoplanes;
        }
	 for($i = 0; $i < $numregistros ; $i++){
            $newvalorcostoplan = new valorcostoplan;
            $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][0]);
			$newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][3]);
            
            $listavalorcostoplanes[$i] = $newvalorcostoplan;
        }
        return $listavalorcostoplanes;
    }

    function updatevalorcostoplan($valorcostoplan){
        $uvalorcostoplan = new valorcostoplan;
        $uvalorcostoplan = $valorcostoplan;
        $querty =   "UPDATE
                     tbl_valorcosto
                    SET
                     idtbl_plan =
                    \"".mysql_real_escape_string($uvalorcostoplan->getIdtbl_plan())."\",
					idtbl_costos =
                    \"".mysql_real_escape_string($uvalorcostoplan->getIdtbl_costos())."\",
					valortbl_valorcosto =
                    \"".mysql_real_escape_string($uvalorcostoplan->getValortbl_valorcosto())."\"
					 WHERE idtbl_valorcosto =
                    ".mysql_real_escape_string($uvalorcostoplan->getIdtbl_valorcosto())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updatevalorcostoplan): '.mysql_error();
            return false;
        }
        return true;
    }

    function deletevalorcostoplan($id){

        $sql = 'Delete FROM tbl_valorcosto WHERE idtbl_valorcosto = '.$id.' ';
		$this->daoConnection->consulta($sql);
    }

    function totalvalorcostoplanes($opt = 0, $campo = 0, $valor = 0){
		if($opt == 0)
			$sql = 'select count(*) FROM tbl_valorcosto;';
		if($opt == 1)
			$sql = 'select count(*) FROM tbl_valorcosto where '.$campo.' LIKE "%'.$valor.'%";';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
		return $this->daoConnection->ObjetoConsulta2[0][0];
	}
	function getDias($idplan){
		$sql = 'select diasmaxtbl_plan  FROM tbl_plan WHERE idtbl_plan = "'.mysql_real_escape_string($idplan) .'" ';
		
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}
?>

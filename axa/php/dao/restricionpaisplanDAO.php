<?php
class restricionpaisplanDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function savrestricionpaisplan($restricionpaisplan){

        $newrestricionpaisplan = new restricionpaisplan;
        $newrestricionpaisplan = $restricionpaisplan;
		/*$sql = 'SELECT * from tbl_restircpaises WHERE  valortbl_restircpaises = "' . mysql_real_escape_string($newrestricionpaisplan->getValortbl_restircpaises()) . '"';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros > 0) {
            return 3;
            exit;
        }*/
        $querty =   "insert into tbl_restircpaises
                    (tbl_plan_idtbl_plan,tbl_destino_idtbl_destino)
                    values(
                    \"".mysql_real_escape_string($newrestricionpaisplan->getTbl_plan_idtbl_plan())."\",
					\"".mysql_real_escape_string($newrestricionpaisplan->getTbl_destino_idtbl_destino())."\"
					
                    )";
                 //echo $querty;
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saverestricionpaisplan): '.mysql_error();
            return 2;
        }
        return 1;
    }

    function getLastId(){
        //return "SELECT id FROM restricionpaisplan ORDER BY  id DESC LIMIT 1";
		return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	function getrestricionpaisplanbyCiudad($ciudadsel){

		$newrestricionpaisplan = new restricionpaisplan;
        $sql = 'SELECT * FROM tbl_restircpaises where valortbl_restircpaises = "'.mysql_real_escape_string($ciudadsel).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newrestricionpaisplan = new restricionpaisplan;
        if($numregistros == 0){
            return $newrestricionpaisplan;
        }
        $newrestricionpaisplan->setIdtbl_restircpaises($this->daoConnection->ObjetoConsulta2[0][0]);
		$newrestricionpaisplan->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[0][1]);
        $newrestricionpaisplan->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[0][2]);
		 
        //$restricionpaisplanToPoblate = $newrestricionpaisplan;
        return $newrestricionpaisplan;
    }
    function getrestricionpaisplan($id){

		$newrestricionpaisplan = new restricionpaisplan;
        $sql = 'SELECT * FROM tbl_restircpaises where idtbl_restircpaises = "'.mysql_real_escape_string($id).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newrestricionpaisplan = new restricionpaisplan;
        if($numregistros == 0){
            return $newrestricionpaisplan;
        }
        $newrestricionpaisplan->setIdtbl_restircpaises($this->daoConnection->ObjetoConsulta2[0][0]);
		$newrestricionpaisplan->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[0][1]);
        $newrestricionpaisplan->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[0][2]);
		
        
        //$restricionpaisplanToPoblate = $newrestricionpaisplan;
        return $newrestricionpaisplan;
    }

    function getrestricionpaisplanes($order, $orderType, $l = 0, $h = 200){
        $sql = 'SELECT * FROM tbl_restircpaises order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listarestricionpaisplanes=array();

        if($numregistros == 0){
            return $listarestricionpaisplanes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newrestricionpaisplan = new restricionpaisplan;
             $newrestricionpaisplan->setIdtbl_restircpaises($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newrestricionpaisplan->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newrestricionpaisplan->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][2]);
			
            
            
            $listarestricionpaisplanes[$i] = $newrestricionpaisplan;
        }
        return $listarestricionpaisplanes;
    }
	
	function getbyPlanid($idplan){
        $sql = 'SELECT * FROM tbl_restircpaises WHERE tbl_plan_idtbl_plan = \''. mysql_real_escape_string($idplan).'\'';
        

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listarestricionpaisplanes=array();

        if($numregistros == 0){
            return $listarestricionpaisplanes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newrestricionpaisplan = new restricionpaisplan;
            $newrestricionpaisplan->setIdtbl_restircpaises($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newrestricionpaisplan->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newrestricionpaisplan->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][2]);
			
            
            
            $listarestricionpaisplanes[$i] = $newrestricionpaisplan;
        }
        return $listarestricionpaisplanes;
    }

    function getrestricionpaisplanesSearch($order, $orderType, $param, $value, $type = 0){

        $sql = 'SELECT * FROM tbl_restircpaises WHERE ';
        if($type == 0)
            $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        if($type == 1)
            $sql .= $param.' = "'.mysql_real_escape_string($value).'" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listarestricionpaisplanes=array();
        if($numregistros == 0){
            return $listarestricionpaisplanes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newrestricionpaisplan = new restricionpaisplan;
            $newrestricionpaisplan->setIdtbl_restircpaises($this->daoConnection->ObjetoConsulta2[0][0]);
			$newrestricionpaisplan->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newrestricionpaisplan->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][2]);
			
            
            $listarestricionpaisplanes[$i] = $newrestricionpaisplan;
        }
        return $listarestricionpaisplanes;
    }

    function search($order, $orderType, $value){
        $sql = 'SELECT * FROM tbl_restircpaises WHERE ';
        $sql .= 'texto LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listarestricionpaisplanes=array();
        if($numregistros == 0){
            return $listarestricionpaisplanes;
        }
	 for($i = 0; $i < $numregistros ; $i++){
            $newrestricionpaisplan = new restricionpaisplan;
            $newrestricionpaisplan->setIdtbl_restircpaises($this->daoConnection->ObjetoConsulta2[0][0]);
			$newrestricionpaisplan->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newrestricionpaisplan->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][2]);
			
            $listarestricionpaisplanes[$i] = $newrestricionpaisplan;
        }
        return $listarestricionpaisplanes;
    }

    function updaterestricionpaisplan($restricionpaisplan){
        $urestricionpaisplan = new restricionpaisplan;
        $urestricionpaisplan = $restricionpaisplan;
        $querty =   "UPDATE
                     tbl_restircpaises
                    SET
                     tbl_plan_idtbl_plan =
                    \"".mysql_real_escape_string($urestricionpaisplan->getTbl_plan_idtbl_plan())."\",
					tbl_destino_idtbl_destino =
                    \"".mysql_real_escape_string($urestricionpaisplan->getTbl_destino_idtbl_destino())."\"
					 WHERE idtbl_restircpaises =
                    ".mysql_real_escape_string($urestricionpaisplan->getIdtbl_restircpaises())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updaterestricionpaisplan): '.mysql_error();
            return false;
        }
        return true;
    }

    function deleterestricionpaisplan($id){

        $sql = 'Delete FROM tbl_restircpaises WHERE idtbl_restircpaises = '.$id.' ';
		$this->daoConnection->consulta($sql);
    }

    function totalrestricionpaisplanes($opt = 0, $campo = 0, $valor = 0){
		if($opt == 0)
			$sql = 'select count(*) FROM tbl_restircpaises;';
		if($opt == 1)
			$sql = 'select count(*) FROM tbl_restircpaises where '.$campo.' LIKE "%'.$valor.'%";';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}
?>

<?php
class costoDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function savcosto($costo){

        $newbanner = new costo;
        $newcosto = $costo;
		/*$sql = 'SELECT * from tbl_costos WHERE  descripciontbl_costos = "' . mysql_real_escape_string($newcosto->getTbl_ciudades_idtbl_ciudades()) . '"';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros > 0) {
            return 2;
            exit;
        }*/
		
        $querty =   "insert into  tbl_costos
                    (descripciontbl_costos)
                    values(
                    \"".mysql_real_escape_string($newcosto->getDescripciontbl_costos())."\"
                    )";
                 //echo $querty;
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (savecosto): '.mysql_error();
            return 3;
        }
        return 1;
    }

    function getLastId(){
        //return "SELECT id FROM  tbl_costos ORDER BY  id DESC LIMIT 1";
		return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function getcosto($idtbl_costos){

		$newcosto = new costo;
        $sql = 'SELECT * from tbl_costos where idtbl_costos = "'.mysql_real_escape_string($idtbl_costos).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newcosto = new costo;
        if($numregistros == 0){
            return $newcosto;
        }
		$i=0;
        $newcosto->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][0]);
		$newcosto->setDescripciontbl_costos($this->daoConnection->ObjetoConsulta2[$i][1]);
		//$costoToPoblate = $newcosto;
        return $newcosto;
    }
	
	
	function getcostobyciudad($ciudadsel, $l = 0, $h = 1){
        $newcosto = new costo;
		$sql = 'SELECT * from tbl_costos WHERE descripciontbl_costos = "'.mysql_real_escape_string($ciudadsel).'"';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newcosto = new costo;
        if($numregistros == 0){
            return $newcosto;
        }
		$i=0;
        $newcosto->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][0]);
		$newcosto->setDescripciontbl_costos($this->daoConnection->ObjetoConsulta2[$i][1]);
		//$costoToPoblate = $newcosto;
        return $newcosto;
    }
    function getcostoes($order, $orderType, $l = 0, $h = 200){
        $sql = 'SELECT * from tbl_costos order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listacostoes=array();

        if($numregistros == 0){
            return $listacostoes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newcosto = new costo;
            $newcosto->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newcosto->setDescripciontbl_costos($this->daoConnection->ObjetoConsulta2[$i][1]);
			
            $listacostoes[$i] = $newcosto;
        }
        return $listacostoes;
    }

    function getcostoesSearch($order, $orderType, $param, $value, $type = 0){

        $sql = 'SELECT * from tbl_costos WHERE ';
        if($type == 0)
            $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        if($type == 1)
            $sql .= $param.' = "'.mysql_real_escape_string($value).'" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listacostoes=array();
        if($numregistros == 0){
            return $listacostoes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newcosto = new costo;
            $newcosto->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newcosto->setDescripciontbl_costos($this->daoConnection->ObjetoConsulta2[$i][1]);
			
            $listacostoes[$i] = $newcosto;
        }
        return $listacostoes;
    }

    function search($order, $orderType, $value){
        $sql = 'SELECT * from tbl_costos WHERE ';
        $sql .= 'texto LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listacostoes=array();
        if($numregistros == 0){
            return $listacostoes;
        }
	 for($i = 0; $i < $numregistros ; $i++){
            $newcosto = new costo;
            $newcosto->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newcosto->setDescripciontbl_costos($this->daoConnection->ObjetoConsulta2[$i][1]);
			
            $listacostoes[$i] = $newcosto;
        }
        return $listacostoes;
    }

    function updatecosto($costo){
        $ucosto = new costo;
        $ucosto = $costo;
        $querty =   "UPDATE  
					tbl_costos
                    SET
                     descripciontbl_costos =
                    \"".mysql_real_escape_string($ucosto->getDescripciontbl_costos())."\"
					WHERE idtbl_costos =
                    ".mysql_real_escape_string($ucosto->getIdtbl_costos())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updatecosto): '.mysql_error();
            return false;
        }
        return true;
    }

    function deletecosto($idtbl_costos){

        $sql = 'Delete from tbl_costos WHERE idtbl_costos = '.$idtbl_costos.' ';
		$this->daoConnection->consulta($sql);
    }

    function totalcostoes($opt = 0, $campo = 0, $valor = 0){
		if($opt == 0)
			$sql = 'select count(*) from tbl_costos;';
		if($opt == 1)
			$sql = 'select count(*) from tbl_costos where '.$campo.' LIKE "%'.$valor.'%";';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}
?>

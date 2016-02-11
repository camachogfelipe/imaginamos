<?php
class PlanDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function savPlan($plan){

        $newplan = new plan;
        $newplan = $plan;
		$newImagendescuento = $Imagendescuento;
		/*$sql = 'SELECT * from tbl_plan WHERE  tbl_ciudades_idtbl_ciudades = "' . mysql_real_escape_string($newplan->getTbl_ciudades_idtbl_ciudades()) . '"';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros > 0) {
            return 3;
            exit;
        }*/
        $querty =   "insert into tbl_plan
                    (descripciontbl_plan,productoanualtbl_plan,diasmaxtbl_plan,edadmintbl_plan,edamaxtbl_plan,valordiaAddtbl_plan)
                    values(
                    \"".mysql_real_escape_string($newplan->getDescripciontbl_plan())."\",
					\"".mysql_real_escape_string($newplan->getProductoanualtbl_plan())."\",
					\"".mysql_real_escape_string($newplan->getDiasmaxtbl_plan())."\",
					\"".mysql_real_escape_string($newplan->getEdadmintbl_plan())."\",
					\"".mysql_real_escape_string($newplan->getEdamaxtbl_plan())."\",
					\"".mysql_real_escape_string($newplan->getValordiaAddtbl_plan())."\"
					
                    )";
                 //echo $querty;
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveplan): '.mysql_error();
            return 2;
        }
        return 1;
    }

    function getLastId(){
        //return "SELECT id FROM plan ORDER BY  id DESC LIMIT 1";
		return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	function getPlanbyCiudad($ciudadsel){

		$newplan = new plan;
        $sql = 'SELECT * FROM tbl_plan where tbl_ciudades_idtbl_ciudades = "'.mysql_real_escape_string($ciudadsel).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newplan = new plan;
        if($numregistros == 0){
            return $newplan;
        }
        $newplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[0][0]);
		$newplan->setDescripciontbl_plan($this->daoConnection->ObjetoConsulta2[0][1]);
        $newplan->setProductoanualtbl_plan($this->daoConnection->ObjetoConsulta2[0][2]);
		$newplan->setDiasmaxtbl_plan($this->daoConnection->ObjetoConsulta2[0][3]);
		$newplan->setEdadmintbl_plan($this->daoConnection->ObjetoConsulta2[0][4]);
		$newplan->setEdamaxtbl_plan($this->daoConnection->ObjetoConsulta2[0][5]);
		$newplan->setValordiaAddtbl_plan($this->daoConnection->ObjetoConsulta2[0][6]);
        
        //$planToPoblate = $newplan;
        return $newplan;
    }
    function getPlan($id){

		$newplan = new plan;
        $sql = 'SELECT * FROM tbl_plan where idtbl_plan = "'.mysql_real_escape_string($id).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
		//$newplan = new plan;
        if($numregistros == 0){
            return $newplan;
        }
        $newplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[0][0]);
		$newplan->setDescripciontbl_plan($this->daoConnection->ObjetoConsulta2[0][1]);
        $newplan->setProductoanualtbl_plan($this->daoConnection->ObjetoConsulta2[0][2]);
		$newplan->setDiasmaxtbl_plan($this->daoConnection->ObjetoConsulta2[0][3]);
		$newplan->setEdadmintbl_plan($this->daoConnection->ObjetoConsulta2[0][4]);
		$newplan->setEdamaxtbl_plan($this->daoConnection->ObjetoConsulta2[0][5]);
        $newplan->setValordiaAddtbl_plan($this->daoConnection->ObjetoConsulta2[0][6]);
        //$planToPoblate = $newplan;
        return $newplan;
    }

    function getPlanes($order, $orderType, $l = 0, $h = 200){
        $sql = 'SELECT * FROM tbl_plan order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listaplanes=array();

        if($numregistros == 0){
            return $listaplanes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newplan = new plan;
            $newplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newplan->setDescripciontbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newplan->setProductoanualtbl_plan($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newplan->setDiasmaxtbl_plan($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newplan->setEdadmintbl_plan($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newplan->setEdamaxtbl_plan($this->daoConnection->ObjetoConsulta2[$i][5]);
            $newplan->setValordiaAddtbl_plan($this->daoConnection->ObjetoConsulta2[$i][6]);
            
            $listaplanes[$i] = $newplan;
        }
        return $listaplanes;
    }

    function getPlanesSearch($order, $orderType, $param, $value, $type = 0){

        $sql = 'SELECT * FROM tbl_plan WHERE ';
        if($type == 0)
            $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        if($type == 1)
            $sql .= $param.' = "'.mysql_real_escape_string($value).'" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listaplanes=array();
        if($numregistros == 0){
            return $listaplanes;
        }
        for($i = 0; $i < $numregistros ; $i++){
            $newplan = new plan;
            $newplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newplan->setDescripciontbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newplan->setProductoanualtbl_plan($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newplan->setDiasmaxtbl_plan($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newplan->setEdadmintbl_plan($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newplan->setEdamaxtbl_plan($this->daoConnection->ObjetoConsulta2[$i][5]);
            $newplan->setValordiaAddtbl_plan($this->daoConnection->ObjetoConsulta2[$i][6]);
            
            $listaplanes[$i] = $newplan;
        }
        return $listaplanes;
    }

    function search($order, $orderType, $value){
        $sql = 'SELECT * FROM tbl_plan WHERE ';
        $sql .= 'texto LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listaplanes=array();
        if($numregistros == 0){
            return $listaplanes;
        }
	 for($i = 0; $i < $numregistros ; $i++){
            $newplan = new plan;
            $newplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newplan->setDescripciontbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newplan->setProductoanualtbl_plan($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newplan->setDiasmaxtbl_plan($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newplan->setEdadmintbl_plan($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newplan->setEdamaxtbl_plan($this->daoConnection->ObjetoConsulta2[$i][5]);
            $newplan->setValordiaAddtbl_plan($this->daoConnection->ObjetoConsulta2[$i][6]);
            $listaplanes[$i] = $newplan;
        }
        return $listaplanes;
    }

    function updatePlan($plan){
        $uplan = new plan;
        $uplan = $plan;
        $querty =   "UPDATE
                     tbl_plan
                    SET
                     descripciontbl_plan =
                    \"".mysql_real_escape_string($uplan->getDescripciontbl_plan())."\",
					productoanualtbl_plan =
                    \"".mysql_real_escape_string($uplan->getProductoanualtbl_plan())."\",
					diasmaxtbl_plan =
                    \"".mysql_real_escape_string($uplan->getDiasmaxtbl_plan())."\",
					edadmintbl_plan =
                    \"".mysql_real_escape_string($uplan->getEdadmintbl_plan())."\",
					edamaxtbl_plan =
                    \"".mysql_real_escape_string($uplan->getEdamaxtbl_plan())."\",
					valordiaAddtbl_plan =
                    \"".mysql_real_escape_string($uplan->getValordiaAddtbl_plan())."\"
					 WHERE idtbl_plan =
                    ".mysql_real_escape_string($uplan->getIdtbl_plan())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updateplan): '.mysql_error();
            return false;
        }
        return true;
    }

    function deletePlan($id){

        $sql = 'Delete FROM tbl_plan WHERE idtbl_plan = '.$id.' ';
		$this->daoConnection->consulta($sql);
    }

    function totalPlanes($opt = 0, $campo = 0, $valor = 0){
		if($opt == 0)
			$sql = 'select count(*) FROM tbl_plan;';
		if($opt == 1)
			$sql = 'select count(*) FROM tbl_plan where '.$campo.' LIKE "%'.$valor.'%";';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}
?>

<?php
class TerminosDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function savTerminos($producto){

        $newproducto = new terminos;
        $newproducto = $producto;
		$querty =   "insert into tbl_terminos
                    (pdftbl_terminos)
                    values(
                    
					\"".mysql_real_escape_string($newproducto->getPdf())."\"
                    )";

                 //echo $querty;
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveproducto): '.mysql_error();
            return false;
        }

        return true;

    }

    function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function getTerminos($id){
		//include ("../php/entities/terminos.php");
        $newproducto = new terminos;

        $sql = 'SELECT * from tbl_terminos where idtbl_terminos = "'.mysql_real_escape_string($id).'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return $newproducto;
        }

        $newproducto->setId($this->daoConnection->ObjetoConsulta2[0][0]);
        $newproducto->setPdf($this->daoConnection->ObjetoConsulta2[0][1]);

        //$productoToPoblate = $newproducto;

        return $newproducto;

    }
	
	function getTerminosu(){
		//include ("../php/entities/terminos.php");
        $newproducto = new terminos;

        $sql = 'SELECT * from tbl_terminos LIMIT 0,1';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return $newproducto;
        }

        $newproducto->setId($this->daoConnection->ObjetoConsulta2[0][0]);
        $newproducto->setPdf($this->daoConnection->ObjetoConsulta2[0][1]);

        //$productoToPoblate = $newproducto;

        return $newproducto;

    }

    function getTerminoses($order, $orderType, $l = 0, $h = 200){

        $sql = 'SELECT * from tbl_terminos order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listaproductoes=array();

        if($numregistros == 0){
            return $listaproductoes;
        }

        //$listaproductoes[];
        //include ("../php/entities/terminos.php");

        for($i = 0; $i < $numregistros ; $i++){
            $newproducto = new terminos;
            $newproducto->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newproducto->setPdf($this->daoConnection->ObjetoConsulta2[$i][1]);
			$listaproductoes[$i] = $newproducto;
        }


        return $listaproductoes;
    }
	

    function getTerminosesSearch($order, $orderType, $param, $value, $type = 0){

        $sql = 'SELECT * from tbl_terminos WHERE ';
        if($type == 0)
            $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        if($type == 1)
            $sql .= $param.' = "'.mysql_real_escape_string($value).'" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

         $listaproductoes=array();

        if($numregistros == 0){
            return $listaproductoes;
        }

        //$listaproductoes[];

        for($i = 0; $i < $numregistros ; $i++){
            $newproducto = new terminos;
            $newproducto->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newproducto->setPdf($this->daoConnection->ObjetoConsulta2[$i][1]);
			$listaproductoes[$i] = $newproducto;
        }


        return $listaproductoes;
    }


    function search($order, $orderType, $value){

        $sql = 'SELECT * from tbl_terminos WHERE ';
        $sql .= 'texto LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= ' OR imagen LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

         $listaproductoes=array();

        if($numregistros == 0){
            return $listaproductoes;
        }

        //$listaproductoes[];

        for($i = 0; $i < $numregistros ; $i++){
            $newproducto = new terminos;
            $newproducto->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
           $newproducto->setPdf($this->daoConnection->ObjetoConsulta2[$i][1]);
			$listaproductoes[$i] = $newproducto;
        }

        return $listaproductoes;
    }
	
    function updateTerminos($producto){
       // include ("../php/entities/text_imagenes_terminos.php");
		$uproducto = new terminos;
        $uproducto = $producto;
		
		
        $querty =   "UPDATE
                     tbl_terminos
                    SET
                    pdftbl_terminos =
                    \"".mysql_real_escape_string($uproducto->getPdf())."\"
                    WHERE idtbl_terminos =
                    ".mysql_real_escape_string($uproducto->getId())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updateproducto): '.mysql_error();
            return false;
        }

        return true;
    }

    function deleteTerminos($id){

        $sql = 'Delete from tbl_terminos WHERE idtbl_terminos = '.$id.' ';

		$this->daoConnection->consulta($sql);
    }

    function totalTerminoses($opt = 0, $campo = 0, $valor = 0){

		if($opt == 0)
			$sql = 'select count(*) from tbl_terminos;';
		if($opt == 1)
			$sql = 'select count(*) from tbl_terminos where '.$campo.' LIKE "%'.$valor.'%";';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}
?>

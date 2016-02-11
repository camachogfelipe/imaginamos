<?php
class GaleriaDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function savGaleria($galeria){

        $newgaleria = new galeria;
        $newgaleria = $galeria;

        $querty =   "insert into galerias
                    (titulo, descripcion, thumbnail, imagen, categoria)
                    values(
                    \"".mysql_real_escape_string($newgaleria->getTitulo())."\",
                    \"".mysql_real_escape_string($newgaleria->getDescripcion())."\",
                    \"".mysql_real_escape_string($newgaleria->getThumbnail())."\",
                    \"".mysql_real_escape_string($newgaleria->getImagen())."\",	
                    \"".mysql_real_escape_string($newgaleria->getCategoria())."\"
                    )";

                 //echo $querty;
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (savegaleria): '.mysql_error();
            return false;
        }

        return true;

    }

    function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function getGaleria($id){

        $newgaleria = new galeria;

        $sql = 'SELECT * from galerias where id = "'.mysql_real_escape_string($id).'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return $newgaleria;
        }

        $newgaleria->setId($this->daoConnection->ObjetoConsulta2[0][0]);
        $newgaleria->setTitulo($this->daoConnection->ObjetoConsulta2[0][1]);
        $newgaleria->setDescripcion($this->daoConnection->ObjetoConsulta2[0][2]);
        $newgaleria->setThumbnail($this->daoConnection->ObjetoConsulta2[0][3]);
        $newgaleria->setImagen($this->daoConnection->ObjetoConsulta2[0][4]);
        $newgaleria->setCategoria($this->daoConnection->ObjetoConsulta2[0][5]);

        //$galeriaToPoblate = $newgaleria;

        return $newgaleria;

    }

    function getGaleriaes($order, $orderType, $l = 0, $h = 200){

        $sql = 'SELECT * from galerias order by '.$order.' '.$orderType.' ';
        $sql .= 'LIMIT '.$l.', '.$h;

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listagaleriaes=array();

        if($numregistros == 0){
            return $listagaleriaes;
        }

        //$listagaleriaes[];
        

        for($i = 0; $i < $numregistros ; $i++){
            $newgaleria = new galeria;
            $newgaleria->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newgaleria->setTitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newgaleria->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
            $newgaleria->setThumbnail($this->daoConnection->ObjetoConsulta2[$i][3]);
            $newgaleria->setImagen($this->daoConnection->ObjetoConsulta2[$i][4]);
            $newgaleria->setCategoria($this->daoConnection->ObjetoConsulta2[$i][5]);
            $listagaleriaes[$i] = $newgaleria;
        }


        return $listagaleriaes;
    }


    function getGaleriaesSearch($order, $orderType, $param, $value, $type = 0){

        $sql = 'SELECT * from galerias WHERE ';
        if($type == 0)
            $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        if($type == 1)
            $sql .= $param.' = "'.mysql_real_escape_string($value).'" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

         $listagaleriaes=array();

        if($numregistros == 0){
            return $listagaleriaes;
        }

        //$listagaleriaes[];

        for($i = 0; $i < $numregistros ; $i++){
            $newgaleria = new galeria;
            $newgaleria->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newgaleria->setTitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newgaleria->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
            $newgaleria->setThumbnail($this->daoConnection->ObjetoConsulta2[$i][3]);
            $newgaleria->setImagen($this->daoConnection->ObjetoConsulta2[$i][4]);
            $newgaleria->setCategoria($this->daoConnection->ObjetoConsulta2[$i][5]);
            $listagaleriaes[$i] = $newgaleria;
        }


        return $listagaleriaes;
    }


    function search($order, $orderType, $value){

        $sql = 'SELECT * from galerias WHERE ';
        $sql .= 'titulo LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= ' OR corta LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= ' OR larga LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

         $listagaleriaes=array();

        if($numregistros == 0){
            return $listagaleriaes;
        }

        //$listagaleriaes[];

        for($i = 0; $i < $numregistros ; $i++){
            $newgaleria = new galeria;
            $newgaleria->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newgaleria->setTitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newgaleria->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
            $newgaleria->setThumbnail($this->daoConnection->ObjetoConsulta2[$i][3]);
            $newgaleria->setImagen($this->daoConnection->ObjetoConsulta2[$i][4]);
            $newgaleria->setCategoria($this->daoConnection->ObjetoConsulta2[$i][5]);
            $listagaleriaes[$i] = $newgaleria;
        }


        return $listagaleriaes;
    }

    function updateGaleria($galeria){
        $ugaleria = new galeria;
        $ugaleria = $galeria;

        $querty =   "UPDATE
                     galerias
                    SET
                     titulo =
                    \"".mysql_real_escape_string($ugaleria->getTitulo())."\",
                     descripcion =
                    \"".mysql_real_escape_string($ugaleria->getDescripcion())."\",
                    thumbnail =
                    \"".mysql_real_escape_string($ugaleria->getThumbnail())."\",
                    imagen =
                    \"".mysql_real_escape_string($ugaleria->getImagen())."\",
                    categoria =
                    \"".mysql_real_escape_string($ugaleria->getCategoria())."\"
                    WHERE id =
                    ".mysql_real_escape_string($ugaleria->getId())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updategaleria): '.mysql_error();
            return false;
        }

        return true;
    }

    function deleteGaleria($id){

        $sql = 'Delete from galerias WHERE id = '.$id.' ';

		$this->daoConnection->consulta($sql);
    }

    function totalGaleriaes($opt = 0, $campo = 0, $valor = 0){

		if($opt == 0)
			$sql = 'select count(*) from galerias;';
		if($opt == 1)
			$sql = 'select count(*) from galerias where '.$campo.' LIKE "%'.$valor.'%";';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];
	}

}
?>

<?php
class AspectsDAO{

    public $daoConnection;

    function __construct(){
	$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
    }

    function getAspect($name){

        $sql = 'SELECT * from aspecto WHERE name = "'.mysql_real_escape_string($name).'"';

	$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $newAspect = new aspect;

        if($numregistros == 0){
            return $newAspect;
        }

        $newAspect->setId($this->daoConnection->ObjetoConsulta2[0][0]);
        $newAspect->setName($this->daoConnection->ObjetoConsulta2[0][1]);
        $newAspect->setValue($this->daoConnection->ObjetoConsulta2[0][2]);
        $newAspect->setDescrp($this->daoConnection->ObjetoConsulta2[0][3]);

        return $newAspect;
    }

    function save(aspect $aspect) {
        $newaspect = new aspect();
        $newaspect->setObject($aspect);

        $querty =   "insert into aspecto
                    (name, valor, descri)
                    values(
                    \"".$newaspect->getName()."\",
                    \"".$newaspect->getValue()."\",
                    \"".$newaspect->getDescrip()."\"
                    )";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
        if (!$result){
            echo 'Ooops (saveaspect): '.mysql_error();
            return false;
        }

        return true;
    }

    function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function getAspectById($name){

        $sql = 'SELECT * from aspecto WHERE id = "'.$name.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $newAspect = new aspect;

        if($numregistros == 0){
            return $newAspect;
        }

        $newAspect->setId($this->daoConnection->ObjetoConsulta2[0][0]);
        $newAspect->setName($this->daoConnection->ObjetoConsulta2[0][1]);
        $newAspect->setValue($this->daoConnection->ObjetoConsulta2[0][2]);
        $newAspect->setDescrp($this->daoConnection->ObjetoConsulta2[0][3]);

        return $newAspect;
    }

    function getAspectByDescr($descr){

        $sql = 'SELECT * from aspecto WHERE descri = "'.$descr.'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $newAspect = new aspect;

        if($numregistros == 0){
            return $newAspect;
        }

        $newAspect->setId($this->daoConnection->ObjetoConsulta2[0][0]);
        $newAspect->setName($this->daoConnection->ObjetoConsulta2[0][1]);
        $newAspect->setValue($this->daoConnection->ObjetoConsulta2[0][2]);
        $newAspect->setDescrp($this->daoConnection->ObjetoConsulta2[0][3]);

        return $newAspect;
    }

    function getAspectSearch($order, $orderType, $param, $value){

        $sql = 'SELECT * from aspecto WHERE ';
        $sql .= $param.' LIKE "%'.mysql_real_escape_string($value).'%" ';
        $sql .= 'order by '.$order.' '.$orderType.' ';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listaAspectos=array();

        if($numregistros == 0){
            return $listaAspectos;
        }

        //$listaarticuloes[];

        for($i = 0; $i < $numregistros ; $i++){
            $newAspect = new aspect;
            $newAspect->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newAspect->setName($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newAspect->setValue($this->daoConnection->ObjetoConsulta2[$i][2]);
            $newAspect->setDescrp($this->daoConnection->ObjetoConsulta2[$i][3]);
            $listaAspectos[$i] = $newAspect;
        }


        return $listaAspectos;
    }

    function deleteAspect($id){

        $sql = 'Delete from aspecto WHERE id = '.$id.' ';

		$this->daoConnection->consulta($sql);
    }

    function updateAspect($aspect){
        $aspecto = new aspect;
        $aspecto->setObject($aspect);

        //$this->daoConnection = new DAO;
        //$this->daoConnection->conectar("rueda", "localhost", "root", "");
        
        $querty =   "UPDATE
                     aspecto
                    SET
                     valor =
                    \"".mysql_real_escape_string($aspecto->getValue())."\",
                    descri =
                    \"".mysql_real_escape_string($aspecto->getDescrip())."\"
                    WHERE id =
                    ".mysql_real_escape_string($aspecto->getId())."
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
        if (!$result){
            echo 'Ooops (updateAspect): '.mysql_error();
            return false;
        }

        return true;
    }

    function total($opt = 0, $campo = 0, $valor = 0){

        if($opt == 0)
            $sql = 'select count(*) from aspecto;';
        if($opt == 1)
            $sql = 'select count(*) from aspecto where '.$campo.' LIKE "%'.$valor.'%";';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

        return $this->daoConnection->ObjetoConsulta2[0][0];
    }

}

?>

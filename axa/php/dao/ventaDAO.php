<?php

class ventaDAO {

    public $daoConnection;

    function __construct() {
        $this->daoConnection = new DAO;
        $this->daoConnection->conectar();
    }

    function save($venta) {
        $nuevaventa = new venta;
        $nuevaventa = $venta;
        /* $sql = 'SELECT * from tbl_ventas WHERE refTransacciontbl_ventas = "'.mysql_real_escape_string($nuevaventa->getRefTransacciontbl_ventas()).'"';
          $this->daoConnection->consulta($sql);
          $this->daoConnection->leerVarios();
          $numregistros = $this->daoConnection->numregistros();

          if($numregistros > 0){
          return false;
          exit;
          } */


        $querty = "insert into tbl_ventas
                    (consecutivotbl_ventas, fechasalidatbl_ventas, fecharegresotbl_ventas, diasviajetbl_ventas, canalventatbl_ventas, valortbl_ventas,observacionestbl_ventas,terminostbl_ventas,tbl_pasajeros_idtbl_pasajeros,tbl_plan_idtbl_plan,tbl_destino_idtbl_destino,reftbl_ventas,redencion)
                    values(
                    \"" . mysql_real_escape_string($nuevaventa->getConsecutivotbl_ventas()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getFechasalidatbl_ventas()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getFecharegresotbl_ventas()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getDiasviajetbl_ventas()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getCanalventatbl_ventas()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getValortbl_ventas()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getObservacionestbl_ventas()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getTerminostbl_ventas()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getTbl_pasajeros_idtbl_pasajeros()) . "\",
					\"" . mysql_real_escape_string($nuevaventa->getTbl_plan_idtbl_plan()) . "\",
                    \"" . mysql_real_escape_string($nuevaventa->getTbl_destino_idtbl_destino()) . "\",
					\"" . mysql_real_escape_string($nuevaventa->getReftbl_ventas()) . "\",
					\"" . mysql_real_escape_string($nuevaventa->getRedencion()) . "\"
					)";

        //echo $querty;
        //echo "<br /><br /><br /><br />";
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (saveventa): ' . mysql_error();
            return false;
        }

        return true;
    }

    function getLastId() {
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function getCountVentas() {
        $query = 'SELECT count(*) FROM tbl_ventas';
        $this->daoConnection->consulta($query);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros == 0) {
            return null;
        }

        $result = $this->daoConnection->ObjetoConsulta2[0][0];
        return $result;
    }

    function getById($id) {

        $sql = 'SELECT * from tbl_ventas WHERE idtbl_ventas = "' . $id . '"';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros == 0) {
            return null;
        }

        $i = 0;
        $venta = new venta;
        $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
        $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
        $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
        $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
        $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
        $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
        $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
        $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
        $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
        $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
        $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
        $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
        $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
        $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
        $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][15]);
        $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][16]);
				$venta->setRefTransacciontbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
        return $venta;
    }

    function getByCode($code) {

        $sql = 'SELECT * from tbl_ventas WHERE temporal = "' . $code . '"';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros == 0) {
            return null;
        }

        $i = 0;
        $venta = new venta;
        $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
        $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
        $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
        $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
        $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
        $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
        $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
        $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
        $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
        $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
        $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
        $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
        $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
        $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
        $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
        $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][15]);

        return $venta;
    }

    function getUserByLogin($login) {

        $sql = 'SELECT * from tbl_ventas WHERE login = "' . $login . '"';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros == 0) {
            return null;
        }

        $i = 0;
        $venta = new venta;
        $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
        $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
        $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
        $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
        $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
        $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
        $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
        $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
        $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
        $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
        $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
        $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
        $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
        $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
        $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
         $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][15]);
        return $venta;
    }

    function getUserByEmail($email) {

        $sql = 'SELECT * from tbl_ventas WHERE email = "' . $email . '"';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if ($numregistros == 0) {
            return null;
        }

        $i = 0;
        $venta = new venta;
        $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
        $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
        $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
        $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
        $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
        $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
        $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
        $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
        $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
        $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
        $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
        $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
        $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
        $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
        $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
         $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][15]);
        return $venta;
    }

    function getAdmin() {

        $sql = 'SELECT * from tbl_ventas WHERE isadmin = "1"';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista = array();

        if ($numregistros == 0) {
            return $lista;
        }

        for ($i = 0; $i < $numregistros; $i++) {
            $venta = new venta;
            $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
            $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
            $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
            $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
            $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
            $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
            $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
            $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
            $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
            $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
            $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
            $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
            $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
            $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
             $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][15]);
            $lista[$i] = $venta;
        }
        return $lista;
    }

    function getChat() {

        $sql = 'SELECT * from tbl_ventas WHERE isadmin = "2"';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista = array();

        if ($numregistros == 0) {
            return $lista;
        }

        for ($i = 0; $i < $numregistros; $i++) {
            $venta = new venta;
            $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
            $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
            $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
            $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
            $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
            $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
            $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
            $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
            $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
            $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
            $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
            $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
            $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
            $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
             $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][15]);
            $lista[$i] = $venta;
        }
        return $lista;
    }

    function getbyReftrans($reftrans) {

        $sql = 'SELECT * from tbl_ventas WHERE refTransacciontbl_ventas = "' . mysql_real_escape_string($reftrans) . '"  ';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista = array();

        if ($numregistros == 0) {
            return $lista;
        }
        for ($i = 0; $i < $numregistros; $i++) {
            $venta = new venta;
            $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
            $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
            $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
            $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
            $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
            $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
            $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
            $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
            $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
            $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
            $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
            $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
            $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
            $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
            $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][16]);
            $lista[$i] = $venta;
        }
        return $lista;
    }
		
		function getbyReftrans2($reftrans) {

        $sql = 'SELECT * from tbl_ventas WHERE reftbl_ventas = "' . mysql_real_escape_string($reftrans) . '"  ';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista = array();

        if ($numregistros == 0) {
            return $lista;
        }
        for ($i = 0; $i < $numregistros; $i++) {
            $venta = new venta;
            $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
            $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
            $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
            $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
            $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
            $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
            $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
            $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
            $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
            $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
            $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
            $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
            $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
            $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
            $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][16]);
            $lista[$i] = $venta;
        }
        return $lista;
    }

    function gets($ll, $hl) {

        $sql = 'SELECT * from tbl_ventas  ';
        $sql .= 'LIMIT ' . $ll . ',' . $hl;

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista = array();

        if ($numregistros == 0) {
            return $lista;
        }

        for ($i = 0; $i < $numregistros; $i++) {
            $venta = new venta;
            $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
            $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
            $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
            $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
            $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
            $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
            $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
            $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
            $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
            $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
            $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
            $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
            $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
            $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
             $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][15]);
            $lista[$i] = $venta;
        }
        return $lista;
    }

    function getsBySearch($order, $orderType, $ll, $hl, $param, $value) {

        $sql = 'SELECT * from tbl_ventas WHERE ';
        $sql .= $param . ' LIKE "%' . mysql_real_escape_string($value) . '%" ';
        $sql .= 'order by ' . $order . ' ' . $orderType . ' ';
        $sql .= 'LIMIT ' . $ll . ',' . $hl;

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista = array();

        if ($numregistros == 0) {
            return $lista;
        }

        for ($i = 0; $i < $numregistros; $i++) {
            $venta = new venta;
            $venta->setIdtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
            $venta->setConsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
            $venta->setFechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
            $venta->setFecharegresotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][3]);
            $venta->setDiasviajetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][4]);
            $venta->setCanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
            $venta->setFechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
            $venta->setValortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
            $venta->setObservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $venta->setTerminostbl_ventas($this->daoConnection->ObjetoConsulta2[$i][9]);
            $venta->setTbl_pasajeros_idtbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
            $venta->setTbl_plan_idtbl_plan($this->daoConnection->ObjetoConsulta2[$i][11]);
            $venta->setTbl_destino_idtbl_destino($this->daoConnection->ObjetoConsulta2[$i][12]);
            $venta->setReftbl_ventas($this->daoConnection->ObjetoConsulta2[$i][13]);
            $venta->setPagoonlinetbl_ventas($this->daoConnection->ObjetoConsulta2[$i][14]);
             $venta->setRedencion($this->daoConnection->ObjetoConsulta2[$i][15]);
            $lista[$i] = $venta;
        }
        return $lista;
    }

    function delete($id) {

        $sql = 'Delete from tbl_ventas WHERE idtbl_ventas = ' . $id . ' ';

        $this->daoConnection->consulta($sql);
    }

    function update($venta) {
        $passCrypt = mhash(MHASH_MD5, $venta->getPass());
        $querty = "UPDATE
                    tbl_ventas
                    SET
					consecutivotbl_ventas = 
					\"" . mysql_real_escape_string($venta->getConsecutivotbl_ventas()) . "\",
					fechasalidatbl_ventas = 
					\"" . mysql_real_escape_string($venta->getFechasalidatbl_ventas()) . "\",
					fecharegresotbl_ventas = 
					\"" . mysql_real_escape_string($venta->getFecharegresotbl_ventas()) . "\",
					diasviajetbl_ventas = 
					\"" . mysql_real_escape_string($venta->getDiasviajetbl_ventas()) . "\",
					canalventatbl_ventas = 
					\"" . mysql_real_escape_string($venta->getCanalventatbl_ventas()) . "\",
					fechaventatbl_ventas = 
					\"" . mysql_real_escape_string($venta->getFechaventatbl_ventas()) . "\",
					valortbl_ventas = 
					\"" . mysql_real_escape_string($venta->getValortbl_ventas()) . "\",
					observacionestbl_ventas = 
					\"" . mysql_real_escape_string($venta->getObservacionestbl_ventas()) . "\",
					terminostbl_ventas = 
					\"" . mysql_real_escape_string($venta->getTerminostbl_ventas()) . "\",
					tbl_pasajeros_idtbl_pasajeros = 
					\"" . mysql_real_escape_string($venta->getTbl_pasajeros_idtbl_pasajeros()) . "\",
					tbl_plan_idtbl_plan = 
					\"" . mysql_real_escape_string($venta->getTbl_plan_idtbl_plan()) . "\",
					tbl_destino_idtbl_destino =
					\"" . mysql_real_escape_string($venta->getTbl_destino_idtbl_destino()) . "\",
					reftbl_ventas = 
					\"" . mysql_real_escape_string($venta->getReftbl_ventas()) . "\",
					pagoonlinetbl_ventas =
					\"" . mysql_real_escape_string($venta->getPagoonlinetbl_ventas()) . "\"
                    WHERE idtbl_ventastbl_ventas =
                    " . mysql_real_escape_string($venta->getIdtbl_ventas()) . "
                    ";
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (updatetbl_ventas): ' . mysql_error();
            return false;
        }

        return true;
    }

    function updatePago($venta) {
        $uUser = new venta;
        $uUser = $venta;

        $querty = "UPDATE
                    tbl_ventas
                    SET
                    refTransacciontbl_ventas =
                    \"" . mysql_real_escape_string($uUser->getRefTransacciontbl_ventas()) . "\",
					pagoonlinetbl_ventas =
                    \"" . mysql_real_escape_string($uUser->getPagoonlinetbl_ventas()) . "\"
					WHERE reftbl_ventas =
                    \"" . mysql_real_escape_string($uUser->getReftbl_ventas()) . "\"
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (updateUserPass): ' . mysql_error();
            return false;
        }

        return true;
    }

    function total($opt = 0, $campo = 0, $valor = 0) {

        if ($opt == 0)
            $sql = 'select count(*) from tbl_ventas;';
        if ($opt == 1)
            $sql = 'select count(*) from tbl_ventas where ' . $campo . ' LIKE "%' . $valor . '%";';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

        return $this->daoConnection->ObjetoConsulta2[0][0];
    }

    function Venta2($id) {
        $sql = 'SELECT `idtbl_ventas`,idtbl_pasajeros,`consecutivotbl_ventas`,`fechasalidatbl_ventas`,`fecharegresotbl_ventas`,
                     `diasviajetbl_ventas`,`canalventatbl_ventas`,`fechaventatbl_ventas`,
`valortbl_ventas`,`descripciontbl_destino`,`nombretbl_pasajeros`,`apellidostbl_pasajeros`,
`identeficaciontbl_pasajeros`,`emailtbl_pasajeros`,`fechanacimientotbl_pasajeros`,`edad`, `descripciontbl_plan`, 
`observacionestbl_ventas`,`terminostbl_ventas`,`reftbl_ventas`,`refTransacciontbl_ventas`,`pagoonlinetbl_ventas`,`redencion`
FROM `tbl_ventas` 
INNER JOIN tbl_destino ON (idtbl_destino=tbl_destino_idtbl_destino)
INNER JOIN tbl_pasajeros ON (idtbl_pasajeros=tbl_pasajeros_idtbl_pasajeros)
INNER JOIN tbl_plan ON (idtbl_plan=tbl_plan_idtbl_plan)
WHERE  idtbl_ventas="' . $id . '" ';

        //echo $sql;
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listaplanes = array();

        if ($numregistros == 0) {
            return $listaplanes;
        }


        for ($i = 0; $i < $numregistros; $i++) {
            $listaplanes[$i]['idtbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][0];
            $listaplanes[$i]['idtbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][1];
            $listaplanes[$i]['consecutivotbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][2];
            $listaplanes[$i]['fechasalidatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][3];
            $listaplanes[$i]['fecharegresotbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][4];
            $listaplanes[$i]['diasviajetbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][5];
            $listaplanes[$i]['canalventatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][6];
            $listaplanes[$i]['fechaventatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][7];
            $listaplanes[$i]['valortbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][8];
            $listaplanes[$i]['descripciontbl_destino'] = $this->daoConnection->ObjetoConsulta2[$i][9];
            $listaplanes[$i]['nombretbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][10];
            $listaplanes[$i]['apellidostbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][11];
            $listaplanes[$i]['identeficaciontbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][12];
            $listaplanes[$i]['emailtbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][13];
            $listaplanes[$i]['fechanacimientotbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][14];
            $listaplanes[$i]['edad'] = $this->daoConnection->ObjetoConsulta2[$i][15];
            $listaplanes[$i]['descripciontbl_plan'] = $this->daoConnection->ObjetoConsulta2[$i][16];
            $listaplanes[$i]['observacionestbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][17];
            $listaplanes[$i]['terminostbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][18];
            $listaplanes[$i]['reftbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][19];
            $listaplanes[$i]['refTransacciontbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][20];
            $listaplanes[$i]['pagoonlinetbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][21];
						$listaplanes[$i]['redencion'] = $this->daoConnection->ObjetoConsulta2[$i][22];
        }
        return $listaplanes;
    }

}

?>

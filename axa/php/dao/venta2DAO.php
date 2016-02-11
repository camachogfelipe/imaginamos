<?php

class venta2DAO {

    public $daoConnection;

    function __construct() {
        $this->daoConnection = new DAO;
        $this->daoConnection->conectar();
    }

    function savvalorcostoplan($valorcostoplan) {

        $newvalorcostoplan = new valorcostoplan;
        $newvalorcostoplan = $valorcostoplan;
        /* $sql = 'SELECT * from tbl_valorcosto WHERE  valortbl_valorcosto = "' . mysql_real_escape_string($newvalorcostoplan->getValortbl_valorcosto()) . '"';
          $this->daoConnection->consulta($sql);
          $this->daoConnection->leerVarios();
          $numregistros = $this->daoConnection->numregistros();

          if ($numregistros > 0) {
          return 3;
          exit;
          } */
        $querty = "insert into tbl_valorcosto
                    (idtbl_plan,idtbl_costos,valortbl_valorcosto)
                    values(
                    \"" . mysql_real_escape_string($newvalorcostoplan->getIdtbl_plan()) . "\",
					\"" . mysql_real_escape_string($newvalorcostoplan->getIdtbl_costos()) . "\",
					\"" . mysql_real_escape_string($newvalorcostoplan->getValortbl_valorcosto()) . "\"
					
                    )";
        //echo $querty;
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (savevalorcostoplan): ' . mysql_error();
            return 2;
        }
        return 1;
    }

    function getLastId() {
        //return "SELECT id FROM valorcostoplan ORDER BY  id DESC LIMIT 1";
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function getvalorcostoplanbyCiudad($ciudadsel) {

        $newvalorcostoplan = new valorcostoplan;
        $sql = 'SELECT * FROM tbl_valorcosto where valortbl_valorcosto = "' . mysql_real_escape_string($ciudadsel) . '"';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        //$newvalorcostoplan = new valorcostoplan;
        if ($numregistros == 0) {
            return $newvalorcostoplan;
        }
        $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][0]);
        $newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[0][1]);
        $newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[0][2]);
        $newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][3]);

        //$valorcostoplanToPoblate = $newvalorcostoplan;
        return $newvalorcostoplan;
    }

    function getvalorcostoplan($id) {

        $newvalorcostoplan = new valorcostoplan;
        $sql = 'SELECT * FROM tbl_valorcosto where idtbl_valorcosto = "' . mysql_real_escape_string($id) . '"';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        //$newvalorcostoplan = new valorcostoplan;
        if ($numregistros == 0) {
            return $newvalorcostoplan;
        }
        $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][0]);
        $newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[0][1]);
        $newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[0][2]);
        $newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][3]);

        //$valorcostoplanToPoblate = $newvalorcostoplan;
        return $newvalorcostoplan;
    }

    function getbyPlanid($idplan, $l = 0, $h = 200) {
        $sql = 'SELECT descripciontbl_costos,valortbl_valorcosto FROM `tbl_valorcosto` INNER JOIN tbl_costos ON tbl_valorcosto.idtbl_costos = tbl_costos.idtbl_costos INNER JOIN tbl_plan ON  tbl_valorcosto.idtbl_plan = tbl_plan.idtbl_plan WHERE tbl_plan.idtbl_plan = "' . mysql_real_escape_string($idplan) . '" AND valortbl_valorcosto <> "0"';
        $sql .= 'LIMIT ' . $l . ', ' . $h;

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listavalorcostoplanes = array();

        if ($numregistros == 0) {
            return $listavalorcostoplanes;
        }
        for ($i = 0; $i < $numregistros; $i++) {
            $newvalorcostoplan = new valorcostoplan;
            $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][2]);
            $newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][3]);


            $listavalorcostoplanes[$i] = $newvalorcostoplan;
        }
        return $listavalorcostoplanes;
    }

    function getvalorcostoplanes($order, $orderType, $l = 0, $h = 200) {
        $sql = 'SELECT * FROM tbl_valorcosto order by ' . $order . ' ' . $orderType . ' ';
        $sql .= 'LIMIT ' . $l . ', ' . $h;

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listavalorcostoplanes = array();

        if ($numregistros == 0) {
            return $listavalorcostoplanes;
        }
        for ($i = 0; $i < $numregistros; $i++) {
            $newvalorcostoplan = new valorcostoplan;
            $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][2]);
            $newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][3]);


            $listavalorcostoplanes[$i] = $newvalorcostoplan;
        }
        return $listavalorcostoplanes;
    }

    function getvalorcostoplanesSearch($order, $orderType, $param, $value, $type = 0) {

        $sql = 'SELECT * FROM tbl_valorcosto WHERE ';
        if ($type == 0)
            $sql .= $param . ' LIKE "%' . mysql_real_escape_string($value) . '%" ';
        if ($type == 1)
            $sql .= $param . ' = "' . mysql_real_escape_string($value) . '" ';
        $sql .= 'order by ' . $order . ' ' . $orderType . ' ';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listavalorcostoplanes = array();
        if ($numregistros == 0) {
            return $listavalorcostoplanes;
        }
        for ($i = 0; $i < $numregistros; $i++) {
            $newvalorcostoplan = new valorcostoplan;
            $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][0]);
            $newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][2]);
            $newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][3]);


            $listavalorcostoplanes[$i] = $newvalorcostoplan;
        }
        return $listavalorcostoplanes;
    }

    function search($order, $orderType, $value) {
        $sql = 'SELECT * FROM tbl_valorcosto WHERE ';
        $sql .= 'texto LIKE "%' . mysql_real_escape_string($value) . '%" ';
        $sql .= 'order by ' . $order . ' ' . $orderType . ' ';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $listavalorcostoplanes = array();
        if ($numregistros == 0) {
            return $listavalorcostoplanes;
        }
        for ($i = 0; $i < $numregistros; $i++) {
            $newvalorcostoplan = new valorcostoplan;
            $newvalorcostoplan->setIdtbl_valorcosto($this->daoConnection->ObjetoConsulta2[0][0]);
            $newvalorcostoplan->setIdtbl_plan($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newvalorcostoplan->setIdtbl_costos($this->daoConnection->ObjetoConsulta2[$i][2]);
            $newvalorcostoplan->setValortbl_valorcosto($this->daoConnection->ObjetoConsulta2[$i][3]);

            $listavalorcostoplanes[$i] = $newvalorcostoplan;
        }
        return $listavalorcostoplanes;
    }

    function updatevalorcostoplan($valorcostoplan) {
        $uvalorcostoplan = new valorcostoplan;
        $uvalorcostoplan = $valorcostoplan;
        $querty = "UPDATE
                     tbl_valorcosto
                    SET
                     idtbl_plan =
                    \"" . mysql_real_escape_string($uvalorcostoplan->getIdtbl_plan()) . "\",
					idtbl_costos =
                    \"" . mysql_real_escape_string($uvalorcostoplan->getIdtbl_costos()) . "\",
					valortbl_valorcosto =
                    \"" . mysql_real_escape_string($uvalorcostoplan->getValortbl_valorcosto()) . "\"
					 WHERE idtbl_valorcosto =
                    " . mysql_real_escape_string($uvalorcostoplan->getIdtbl_valorcosto()) . "
                    ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (updatevalorcostoplan): ' . mysql_error();
            return false;
        }
        return true;
    }

    function deletevalorcostoplan($id) {

        $sql = 'Delete FROM tbl_valorcosto WHERE idtbl_valorcosto = ' . $id . ' ';
        $this->daoConnection->consulta($sql);
    }

    function totalvalorcostoplanes($opt = 0, $campo = 0, $valor = 0) {
        if ($opt == 0)
            $sql = 'select count(*) FROM tbl_valorcosto;';
        if ($opt == 1)
            $sql = 'select count(*) FROM tbl_valorcosto where ' . $campo . ' LIKE "%' . $valor . '%";';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        return $this->daoConnection->ObjetoConsulta2[0][0];
    }

    function getDias($idplan) {
        $sql = 'select diasmaxtbl_plan  FROM tbl_plan WHERE idtbl_plan = "' . mysql_real_escape_string($idplan) . '" ';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        return $this->daoConnection->ObjetoConsulta2[0][0];
    }

    function getVenta2($fini, $ffin) {
        $ffin = strtotime('+1 day', strtotime($ffin));
        $ffin = date('Y-m-j', $ffin);
        $sql = 'SELECT `idtbl_ventas`,`consecutivotbl_ventas`,`canalventatbl_ventas`,`fecharegresotbl_ventas`,
                     `diasviajetbl_ventas`,fechasalidatbl_ventas, `fechaventatbl_ventas`,
`valortbl_ventas`,`descripciontbl_destino`,`nombretbl_pasajeros`,`apellidostbl_pasajeros`,
`identeficaciontbl_pasajeros`,`emailtbl_pasajeros`,`fechanacimientotbl_pasajeros`,`edad`, `descripciontbl_plan`, 
`observacionestbl_ventas`,`terminostbl_ventas`,`reftbl_ventas`,`refTransacciontbl_ventas`,`pagoonlinetbl_ventas`,redencion
FROM `tbl_ventas` 
INNER JOIN tbl_destino ON (idtbl_destino=tbl_destino_idtbl_destino)
INNER JOIN tbl_pasajeros ON (idtbl_pasajeros=tbl_pasajeros_idtbl_pasajeros)
INNER JOIN tbl_plan ON (idtbl_plan=tbl_plan_idtbl_plan)
WHERE
`fechaventatbl_ventas` 
BETWEEN  "' . $fini . '"
AND  "' . $ffin . '"
ORDER BY `tbl_ventas`.`fechaventatbl_ventas` DESC'; //.$order.' '.$orderType.' ';
//        $sql .= 'LIMIT '.$l.', '.$h;
// echo $sql;
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listaplanes = array();

        if ($numregistros == 0) {
            return $listaplanes;
        }


        for ($i = 0; $i < $numregistros; $i++) {
            $listaplanes[$i]['idtbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][0];
            $listaplanes[$i]['consecutivotbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][1];
            $listaplanes[$i]['fechasalidatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][2];
            $listaplanes[$i]['fecharegresotbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][3];
            $listaplanes[$i]['diasviajetbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][4];
            $listaplanes[$i]['canalventatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][5];
            $listaplanes[$i]['fechaventatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][6];
            $listaplanes[$i]['valortbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][7];
            $listaplanes[$i]['descripciontbl_destino'] = $this->daoConnection->ObjetoConsulta2[$i][8];
            $listaplanes[$i]['nombretbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][9];
            $listaplanes[$i]['apellidostbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][10];
            $listaplanes[$i]['identeficaciontbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][11];
            $listaplanes[$i]['emailtbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][12];
            $listaplanes[$i]['fechanacimientotbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][13];
            $listaplanes[$i]['edad'] = $this->daoConnection->ObjetoConsulta2[$i][14];
            $listaplanes[$i]['descripciontbl_plan'] = $this->daoConnection->ObjetoConsulta2[$i][15];
            $listaplanes[$i]['observacionestbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][16];
            $listaplanes[$i]['terminostbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][17];
            $listaplanes[$i]['reftbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][18];
            $listaplanes[$i]['refTransacciontbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][19];
            $listaplanes[$i]['pagoonlinetbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][20];
            $listaplanes[$i]['redencion'] = $this->daoConnection->ObjetoConsulta2[$i][21];
            /*  $venta = new valorcostoplan();
              $venta->setIidtbl_ventas($this->daoConnection->ObjetoConsulta2[$i][0]);
              $venta->setconsecutivotbl_ventas($this->daoConnection->ObjetoConsulta2[$i][1]);
              $venta->setfechasalidatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][2]);
              $venta->setfecharegresotbl_ventas ($this->daoConnection->ObjetoConsulta2[$i][3]);
              $venta->setdiasviajetbl_ventas ($this->daoConnection->ObjetoConsulta2[$i][4]);
              $venta->setcanalventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][5]);
              $venta->setfechaventatbl_ventas($this->daoConnection->ObjetoConsulta2[$i][6]);
              $venta->setvalortbl_ventas($this->daoConnection->ObjetoConsulta2[$i][7]);
              $venta->setdescripciontbl_destino ($this->daoConnection->ObjetoConsulta2[$i][8]);
              $venta->setnombretbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][9]);
              $venta->setapellidostbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][10]);
              $venta->setidenteficaciontbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][11]);
              $venta->setemailtbl_pasajeros ($this->daoConnection->ObjetoConsulta2[$i][12]);
              $venta->setfechanacimientotbl_pasajeros($this->daoConnection->ObjetoConsulta2[$i][13]);
              $venta->setedad ($this->daoConnection->ObjetoConsulta2[$i][14]);
              $venta->setdescripciontbl_plan($this->daoConnection->ObjetoConsulta2[$i][15]);
              $venta->setobservacionestbl_ventas($this->daoConnection->ObjetoConsulta2[$i][16]);
              $venta->setterminostbl_ventas ($this->daoConnection->ObjetoConsulta2[$i][17]);
              $venta->setreftbl_ventas ($this->daoConnection->ObjetoConsulta2[$i][18]);
              $venta->setrefTransacciontbl_ventas($this->daoConnection->ObjetoConsulta2[$i][19]);
              $venta->setpagoonlinetbl_ventas ($this->daoConnection->ObjetoConsulta2[$i][20]);
             */

            //$listaplanes[$i] = $venta;
        }
        /* echo "<pre>";
          print_r($listaplanes);
          echo "</pre>"; */
        return $listaplanes;
    }

    function getVenta3() {
        $sql = 'SELECT `idtbl_ventas`,`consecutivotbl_ventas`,`fechasalidatbl_ventas`,`fecharegresotbl_ventas`,
                     `diasviajetbl_ventas`,`canalventatbl_ventas`,`fechaventatbl_ventas`,
`valortbl_ventas`,`descripciontbl_destino`,`nombretbl_pasajeros`,`apellidostbl_pasajeros`,
`identeficaciontbl_pasajeros`,`emailtbl_pasajeros`,`fechanacimientotbl_pasajeros`,`edad`, `descripciontbl_plan`, 
`observacionestbl_ventas`,`terminostbl_ventas`,`reftbl_ventas`,`refTransacciontbl_ventas`,`pagoonlinetbl_ventas`
FROM `tbl_ventas` 
INNER JOIN tbl_destino ON (idtbl_destino=tbl_destino_idtbl_destino)
INNER JOIN tbl_pasajeros ON (idtbl_pasajeros=tbl_pasajeros_idtbl_pasajeros)
INNER JOIN tbl_plan ON (idtbl_plan=tbl_plan_idtbl_plan) order by fechasalidatbl_ventas desc';
        /*
          WHERE  `fechaventatbl_ventas`
          BETWEEN  "2013-06-18"
          AND  "2013-06-21"
          ';//.$order.' '.$orderType.' '; */
//        $sql .= 'LIMIT '.$l.', '.$h;
// echo $sql;
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $listaplanes = array();

        if ($numregistros == 0) {
            return $listaplanes;
        }


        for ($i = 0; $i < $numregistros; $i++) {
            $listaplanes[$i]['idtbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][0];
            $listaplanes[$i]['consecutivotbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][1];
            $listaplanes[$i]['fechasalidatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][2];
            $listaplanes[$i]['fecharegresotbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][3];
            $listaplanes[$i]['diasviajetbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][4];
            $listaplanes[$i]['canalventatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][5];
            $listaplanes[$i]['fechaventatbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][6];
            $listaplanes[$i]['valortbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][7];
            $listaplanes[$i]['descripciontbl_destino'] = $this->daoConnection->ObjetoConsulta2[$i][8];
            $listaplanes[$i]['nombretbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][9];
            $listaplanes[$i]['apellidostbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][10];
            $listaplanes[$i]['identeficaciontbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][11];
            $listaplanes[$i]['emailtbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][12];
            $listaplanes[$i]['fechanacimientotbl_pasajeros'] = $this->daoConnection->ObjetoConsulta2[$i][13];
            $listaplanes[$i]['edad'] = $this->daoConnection->ObjetoConsulta2[$i][14];
            $listaplanes[$i]['descripciontbl_plan'] = $this->daoConnection->ObjetoConsulta2[$i][15];
            $listaplanes[$i]['observacionestbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][16];
            $listaplanes[$i]['terminostbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][17];
            $listaplanes[$i]['reftbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][18];
            $listaplanes[$i]['refTransacciontbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][19];
            $listaplanes[$i]['pagoonlinetbl_ventas'] = $this->daoConnection->ObjetoConsulta2[$i][20];

            //$listaplanes[$i] = $venta;
        }
        /* echo "<pre>";
          print_r($listaplanes);
          echo "</pre>"; */
        return $listaplanes;
    }

}

?>

<?php session_start(); ?>
<?php

include '../dao/daoConnection.php';
include '../dao/ventaDAO.php';
include '../entities/venta.php';
include '../functions/simpleImages.php';

$datos = explode(',', $_POST['datos']);
$array = array_values(array_diff($datos, array('')));
if ($datos == "") {
    echo 'vacio';
}
$redencion = 'LOCAL';
if (isset($_SESSION['rede'])) {
    $daoConnection = new DAO;
    $daoConnection->conectar();
    $query = 'SELECT * FROM empresa_url where id=' . $_SESSION['rede'];
    $result = $daoConnection->consultaObj($query);
    $redencion = $result[0]['nombre'];
}

$ventaDAO = new ventaDAO;
$venta = new venta;


for ($k = 0; $k < count($array); $k++) {
    $fecha1 = explode('/', $array[$k]);
    $fecha2 = explode('/', $array[$k + 1]);
    $venta->setFechasalidatbl_ventas($fecha1[2] . '-' . $fecha1[1] . '-' . $fecha1[0]);
    $venta->setFecharegresotbl_ventas($fecha2[2] . '-' . $fecha2[1] . '-' . $fecha2[0]);
    $venta->setDiasviajetbl_ventas($array[$k + 2]);
    $venta->setCanalventatbl_ventas($array[$k + 3]);
    if ($k > 1) {
        $venta->setValortbl_ventas(0);
    }
    if ($k == 0) {
        $venta->setValortbl_ventas($array[$k + 4]);
    }
    if ($array[$k + 5] == 1) {
        $venta->setTerminostbl_ventas('SI');
    }
    if ($array[$k + 5] == 0) {
        $venta->setTerminostbl_ventas('NO');
    }
    $venta->setTbl_pasajeros_idtbl_pasajeros($array[$k + 6]);
    $venta->setTbl_plan_idtbl_plan($array[$k + 7]);
    $venta->setTbl_destino_idtbl_destino($array[$k + 8]);
    $venta->setReftbl_ventas($array[$k + 9]);
    $venta->setPagoonlinetbl_ventas('NO');
    $venta->setRedencion($redencion);
    if ($ventaDAO->save($venta)) {
        $k+=9;
        $arrid[$k] = $ventaDAO->getLastId();
        $save = true;
    } else {
        $save = false;
        break;
    }
}

if ($save == true) {

    $llave_encripcion = "137e2eab080"; //"137e5c042e4"; //llave de encripción que se usa para generar la fima
    $usuarioId = "85894"; //"85902"; //código único del cliente
    $refVenta = $array[9];
    $valor = $array[4];
    $moneda = "COP";
    $firma_cadena = "$llave_encripcion~$usuarioId~$refVenta~$valor~$moneda"; //concatenación para realizar la firma
    $firma = md5($firma_cadena); //creación de la firma con la cadena previamente hecha
    echo $firma;
    /*
      $arrid = array_values(array_diff($arrid, array('')));
      $countclient = count($arrid);
      for ($p=0;$p<($countclient);$p++)
      {
      if ($p==$countclient-1)
      {
      echo $arrid[$p];
      }
      else
      {
      echo $arrid[$p].',';
      }
      } */
} else {
    echo $save;
}
?>
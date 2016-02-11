<?php
$pagina = 'contacto';
require_once './config.php';
require_once '../../shared/lib/excelwriter/excelwriter.inc.php';

$sql = "SELECT * FROM contacto
		WHERE fecha BETWEEN '{$_POST['fechaInicial']}' AND '{$_POST['fechaFinal']}'
		ORDER BY fecha DESC";

$conex = conexion();
$result = mysql_query($sql, $conex);
$matrix = array();
while ( $row = mysql_fetch_array($result) ) {
	$vector = array();
	$vector['fecha'] = $row['fecha'];
	$vector['nombre'] = $row['nombre'];
	$vector['ciudad'] = $row['ciudad'];
	$vector['correo'] = $row['correo'];
	$vector['telefono'] = $row['telefono'];
	$vector['esCliente'] = $row['esCliente'];
	$vector['tipoDocumento'] = $row['tipoDocumento'];
	$vector['identificacion'] = $row['identificacion'];
	$vector['celular'] = $row['celular'];
	$vector['motivo'] = $row['motivo'];
	$vector['regimen'] = $row['regimen'];
	$vector['numCel'] = $row['numCel'];
	$vector['opinion'] = $row['opinion'];
	array_push($matrix, $vector);
}

$nombreArchivo = "../../shared/img/tmp/contacto_" . date('Ymd_His') . ".xls";
$excel = new ExcelWriter($nombreArchivo);
if($excel==false) {
	echo $excel->error;
}

$cabeceras = array_keys($matrix[0]);
$excel->writeLine($cabeceras);

//Se sacan los valores
foreach($matrix AS $indice => $vector){
	$excel->writeLine($vector);
}
$excel->close();

UtilBusiness::showFile($nombreArchivo);
unlink($nombreArchivo);
?>
<?php

include '../../../../funciones_php/phpEcxel/Classes/PHPExcel.php';
//include '../../../../funciones_php/phpEcxel/classes/PHPExcel/writer/Excel2007.php';
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

$objPHPExcel = new PHPExcel();


$query = "SELECT * FROM usuario ORDER BY id ASC";
$db->doQuery($query, SELECT_QUERY);
$results = $db->results;
$numOfResults = $db->getNumResults();


$objPHPExcel->setActiveSheetIndex(0);
$a = 3;

$objPHPExcel->getActiveSheet()->SetCellValue("A1", "Nombre");
$objPHPExcel->getActiveSheet()->SetCellValue("B1", "Apellido");
$objPHPExcel->getActiveSheet()->SetCellValue("C1", "Correo");
$objPHPExcel->getActiveSheet()->SetCellValue("D1", "Empresa");
$objPHPExcel->getActiveSheet()->SetCellValue("E1", "Cargo");
$objPHPExcel->getActiveSheet()->SetCellValue("F1", "Telefono");
$objPHPExcel->getActiveSheet()->SetCellValue("G1", "Celular");
$objPHPExcel->getActiveSheet()->SetCellValue("H1", "Pais");

for ($i = 0; $i < count($results); $i++) {

    $objPHPExcel->getActiveSheet()->SetCellValue("A" . $a, $results[$i]['nombre']);
    $objPHPExcel->getActiveSheet()->SetCellValue("B" . $a, $results[$i]['apellido']);
    $objPHPExcel->getActiveSheet()->SetCellValue("C" . $a, $results[$i]['correo']);
    $objPHPExcel->getActiveSheet()->SetCellValue("D" . $a, $results[$i]['empresa']);
    $objPHPExcel->getActiveSheet()->SetCellValue("E" . $a, $results[$i]['cargo']);
    $objPHPExcel->getActiveSheet()->SetCellValue("F" . $a, $results[$i]['telefono']);
    $objPHPExcel->getActiveSheet()->SetCellValue("G" . $a, $results[$i]['movil']);
    $objPHPExcel->getActiveSheet()->SetCellValue("H" . $a, $results[$i]['pais']);
    $a++;
}

//Titulo del libro y seguridad
$objPHPExcel->getActiveSheet()->setTitle('Usuarios');
$objPHPExcel->getSecurity()->setLockWindows(true);
$objPHPExcel->getSecurity()->setLockStructure(true);


// Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel.
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Usuarios.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
?>

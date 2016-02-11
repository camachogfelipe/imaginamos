<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/pdfDAO.php';
include '../entities/pdf.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$archivo = $_POST['archivo'];

$location = "location: ./../../admin/menuAdmin.php?s=pdfEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

$pdfDAO = new pdfDAO();

$pdf = new pdf();

$pdf = $pdfDAO->getById($id);

$pdf->setid($id);
if (is_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'])  ) {
    $src= "/contenidos/";


    $imagen = $HTTP_POST_FILES['archivo']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "pdf" || $imagen1[1] == "PDF" || $imagen1[1] == "doc" || $imagen1[1] == "DOC" || $imagen1[1] == "rtf" || $imagen1[1] == "RTF" || $imagen1[1] == "docx" || $imagen1[1] == "DOCX" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$pdf->getarchivo());


        move_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $pdf->setarchivo($logo);
    } else {

        header($location.'&error10');
        exit;

    }




}

$pdfDAO->update($pdf);

$location = "location: ./../../admin/menuAdmin.php?s=pdfEdit&a=".$id;

header($location.'&ok2');
exit;


?>
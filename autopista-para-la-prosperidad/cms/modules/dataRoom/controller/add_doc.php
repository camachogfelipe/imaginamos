<?php

session_start();
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

$tamano = $_FILES['file']['size'];
$tamano = $_FILES['file']['size'];
$tipo = $_FILES['file']['type'];
$archivo = $_FILES['file']['name'];

//print_r($_FILES);
if (!$tamano == NULL) {

    $prefijo = substr(md5(uniqid(rand())), 0, 6);
    $destino = "../../../../documentos/" . $prefijo . "_" . $archivo;
    $ubicacion = $prefijo . "_" . $archivo;
    move_uploaded_file($_FILES['file']['tmp_name'], $destino);
}
$tamano=$tamano/1024;

$id = base64_decode($_POST["id"]);
$categoria = $_SESSION["categoria"];

if ($_POST["nivel"] == "nivel_1") {
    $nivel1 = $_SESSION["actual"];
    $nivel2 = 0;
    $nivel3 = 0;
}

if ($_POST["nivel"] == "nivel_2") {
    $nivel2 = $_SESSION["actual"];
    $query = "SELECT * FROM nivel_2 where id = '$nivel2' ORDER BY id ASC";
    $db->doQuery($query, SELECT_QUERY);
    $results = $db->results;
    $numOfResults = $db->getNumResults();

    foreach ($results as $result) {
    $nivel1 = $result[nivel_1_id];
    }
    $nivel3 = 0;
}

if ($_POST["nivel"] == "nivel_3") {
    $nivel3 = $_SESSION["actual"];
    $query = "SELECT * FROM nivel_3 where id = '$nivel3' ORDER BY id ASC";
    $db->doQuery($query, SELECT_QUERY);
    $results = $db->results;
    $numOfResults = $db->getNumResults();

    
    foreach ($results as $result) {
        $nivel2 = $result[nivel_2_id];
    }
    $query = "SELECT * FROM nivel_2 where id = '$nivel2' ORDER BY id ASC";
    $db->doQuery($query, SELECT_QUERY);
    $results = $db->results;
    $numOfResults = $db->getNumResults();

    foreach ($results as $result) {
    $nivel1 = $result[nivel_1_id];
    }
}

$query = "INSERT INTO documentos (
                                                   categoria,
                                                   nivel1,
                                                   nivel2,
                                                   nivel3,
                                                   documento,
                                                   peso
                                                 ) VALUES
                                                 (                                                   
                                                    '$categoria',
                                                    '$nivel1',
                                                    '$nivel2',
                                                    '$nivel3',
                                                    '$archivo',
                                                    '$tamano'
                                                    
                                                 )";


die($query);

if ($db->doQuery($query, INSERT_QUERY)) {
    $id = base64_encode($id);
    $datos=$_SESSION["var2"];
    header('Location: ../view/index.php?Erno=1');
    header('Location: ../view/documentos.php?'.$datos);
} else {
    
}
?>
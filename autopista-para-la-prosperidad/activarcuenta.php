<?php
include("cms/core/class/db.class.php");
//Creamos objeto database
$db = new Database();
$db->connect();
    $correo = $_POST['correo'];

    $db->doQuery("UPDATE usuario SET activo = 1 WHERE correo ='$correo'",INSERT_QUERY);
    echo "UPDATE usuario SET activo = 1 WHERE correo ='$correo'";
?>

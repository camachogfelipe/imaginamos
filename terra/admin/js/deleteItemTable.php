<?php
////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
session_start();
include("../core/class/db.class.php");
$db = new Database();
$db->connect();

$idToDelete = $_GET[id]; //id del item a eliminar
$tableToDelete = $_GET[ttd]; //tabla de la cual se eliminara el registro
$nameField = $_GET[nf]; //nombre del campo de la tabla para el WHERE del query

$query = "DELETE FROM $tableToDelete WHERE $nameField = '$idToDelete'";
$db->doQuery($query,DELETE_QUERY);
?>
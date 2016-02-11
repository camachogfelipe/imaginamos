<?php
session_start();
include 'includes.php';
$compraDAO=new CompraDAO;
$codigo_respuesta_pol=$_GET["codigo_respuesta_pol"];
$ref_pol=$_GET['ref_pol'];
$fecha=$_GET['fecha_procesamiento'];
$correo=$_GET['emailComprador'];
$cancionescompra=$_SESSION['cancio'];
$compraDAO->Compras($ref_pol,$fecha,$codigo_respuesta_pol,$correo,$cancionescompra);
?>
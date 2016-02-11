<?php
////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
session_start();
if(!isset($_SESSION["CMSRolUser"])){
header("Location: ../../../dashboard.php");
}
?>
<?php

if ($_GET["action"]=="addproductos") {

  $cotizacion_id=$_GET["cotizacion"];
  include("lib_carrito.php"); 

  $_SESSION["ocarrito"]->guardar_carrito($cotizacion_id); 
  $location = "location: ./catalogo.php?send=";
  header($location.'1');

}

?>
<?php
include("lib_carrito.php");
$_SESSION["ocarrito"]->introduce_producto($_GET["q"], $_GET["m"], $_GET["s"]);
$location = "location: ./catalogo_paso3.php?add=1&id=".$_GET["q"];
header($location);
?>
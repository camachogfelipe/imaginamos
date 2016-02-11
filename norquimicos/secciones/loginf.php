<?php

include("admin/core/class/db.class.php");
$user = $_POST["user"];
$pass = $_POST["pass"];

$db = new Database();
$db->connect();
$db->doQuery("SELECT * FROM user WHERE usuario='$user' and contrasena='$pass'and bandera=0", SELECT_QUERY);
$resultado = $db->results;
if (count($resultado) > 0) {
   $html = 1;
} else {
  $html = 0;
}
echo $html;
?>

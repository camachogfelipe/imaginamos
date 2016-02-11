<?php 
require_once 'procesos/class_procesos.php';
require_once 'core/validation.php';
$objecta = new Procesos();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      $objecta->SetVenta($_SESSION["session_user"],'juan','321',$_SESSION["session_tienda"]);
    //echo json_encode(array('respuesta' => "ok"));
        ?>
    </body>
</html>

<?php

require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();

$output_string = '';
$output_string = $objecta->Verifica();

echo json_encode($output_string);


?>
   
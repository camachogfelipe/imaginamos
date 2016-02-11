<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
$result = $objecta->GetCredito($_SESSION["session_user"]);
    $output_string = '';
for ($i = 0, $fin = count($result); $i < $fin; $i++) {
    $output_string = 'Creditos Disponibles: ' . $result[0]['TotalCredito'];
    
        
}
echo json_encode($output_string);
?>
   
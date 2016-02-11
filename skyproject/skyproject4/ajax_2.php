<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
$result = $objecta->GetReporteVenta2();
    $output_string = '';
for ($i = 0, $fin = count($result); $i < $fin; $i++) {
    $result2 = $objecta->Estadoventa($result[$i]['id_EstadoVenta']);
    $output_string .= '<p style="margin-left: 5px;margin-right: 5px;margin-bottom: 2px;font-size: 10px;float: left;width: 100%;">'.$result[$i]['nombre_Cliente'].'<strong>';
        if($result2[0]['id_EstadoVenta'] == 1){
    $output_string .= '<i style="font-size: 11px;color: red;">'.$result2[0]['nombre_Estado'].'</i></strong></p>';
        }elseif($result2[0]['id_EstadoVenta'] == 2){
            $output_string .= '<i style="font-size: 11px;color: green;">'.$result2[0]['nombre_Estado'].'</i></strong></p>';
        }else{
            $output_string .= '<i style="font-size: 11px;color: blue;">'.$result[$i]['codigo_Venta'].'</i></strong></p>';
        }
}
echo json_encode($output_string);
?>
   
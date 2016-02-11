<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
$result = $objecta = new Procesos();
$result = $objecta->GetReporteVenta2();
$c=count($result);
if ($c>0){
    $output_string = '';
        $output_string .= "<table border='1' width='500px' ><tr style='background-color:#E0E0E0 ;'>";
        $output_string .= "<td><center><b>Nombre</b></center></td>";
        $output_string .= "<td><center><b>Tel&eacute;fono</b></center></td>";
        $output_string .= "<td><center><b>Estado</b></center></td>";
        $output_string .= "<td><center><b>Fecha</b></center></td>";
        $output_string .= "</tr>";
        $j=0;
    for ($i = 0, $fin = count($result); $i < $fin; $i++) {

       // $output_string .= "<tr>";
        $result2 = $objecta->Estadoventa($result[$i]['id_EstadoVenta']);
        if ($result2[0]['id_EstadoVenta'] == 1) {
        if ($j%2==0){
          $output_string.= '<tr>';
         }else{
           $output_string .= '<tr style="background-color:#D1E0E0;">';  
         }
            $output_string .= '<td>' . $result[$i]['nombre_Cliente'] . '</td>';
            $output_string .= '<td>' . $result[$i]['celular_Cliente'] . '</td>';
            $output_string .= '<td><div style="color: red;"><center>' . $result2[0]['nombre_Estado'] . '</center></div></td>';
            $output_string .= '<td>' . $result[$i]['fecha_Venta'] . '</td>';
        $j++;

        }
        $output_string .= "</tr>";
    }
    $output_string .= "</table>";
}
echo json_encode($output_string);
?>
   
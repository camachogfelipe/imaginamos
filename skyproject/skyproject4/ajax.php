<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();

    //print_r($_POST);
    if(isset($_POST['tienda_id'])){
    $objecta->SetEditarTiendas();
    }
    //echo json_encode(array('respuesta' => "ok"));
    if(isset($_POST['usuario_id'])){
    //echo json_encode(array('respuesta' => "ok"));
    $objecta->SetEditarAdmin();
    }
    if(isset($_POST['usuario_idD'])){
    //echo json_encode(array('respuesta' => "ok"));
    $objecta->SetDeleteAdmin($_POST['usuario_idD']);
    }
    if(isset($_POST['sebas2'])){
    //echo json_encode(array('respuesta' => "ok"));
    $objecta->SetCredito($_POST['sebas2'],$_SESSION["session_user"],$_POST['cash']);
    }
    
    if (isset($_POST["elegido"])) {
    
        $options = "";
        $result = $objecta->GetVendedor($_POST["elegido"]);
        for ($i = 0; $i < count($result); $i++) {
             echo $options = '<option value="'.$result[$i]['id_Usuario'].'">'.$result[$i]['nombre_Usuario'].'</option>';
        }

    }
    if (isset($_POST["elegido3"])) {
    
        $options = "";
        $result = $objecta->GetVendedor($_POST["elegido3"]);
        $options = '<option value="seleccione">-- Seleccione vendedor --</option>';
        for ($i = 0; $i < count($result); $i++) {
              $options .= '<option value="'.$result[$i]['id_Usuario'].'">'.$result[$i]['nombre_Usuario'].'</option>';
        }
        echo $options;
    }
    
    if (isset($_POST["elegido4"])) {
    
        $options = "";
        $result = $objecta->GetCredito($_POST["elegido4"]);
        echo $options = $result[0]['TotalCredito'];
 
    }
    if (isset($_POST["adminelegido"])) {
    
        $options = "";
        $result = $objecta->GetChangeAdmin($_POST["adminelegido"]);
        for ($i = 0; $i < count($result); $i++) {
             echo $options = '<option value="'.$result[$i]['id_Usuario'].'">'.$result[$i]['nombre_Usuario'].'</option>';
        }

    }
    if (isset($_POST["idvendedor"])) {
            $result = $objecta->GetVendedorId($_POST["idvendedor"]);
            //echo array('login' => $result[0]['login_Usuario']);
            echo '{ "email":"'.$result[0]['email_Usuario'].'","celular":"'.$result[0]['celular_Usuario'].'" ,"login":"'.$result[0]['login_Usuario'].'"}';
         
    }
    if (isset($_POST["año1"])) {
    
        $result = $objecta->GetReporteTienda($_POST['año1'],$_POST['idtienda1'],$_POST['vendedor1']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    if (isset($_POST["año2"])) {
    
        $result = $objecta->GetReporteTiendaMes($_POST['año2'],$_POST['mes2'],$_POST['idtienda2'],$_POST['vendedor2']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel2();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    if (isset($_POST["año3"])) {
    
        $result = $objecta->GetReporteTiendadia($_POST['año3'],$_POST['idtienda3'],$_POST['vendedor3']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel2();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    if (isset($_POST["admin1"])) {
    
        
        $result = $objecta->GetVentas2($_POST['admin1'],$_POST['añoseb']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel2();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    if (isset($_POST["admin2"])) {
    
        
        $result = $objecta->GetVentas3($_POST['admin2'],$_POST['ano2'],$_POST['mes2']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel3();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    if (isset($_POST["dia"])) {
    
        
        $result = $objecta->GetVentas4($_POST['admin3'],$_POST['tiendaadmin'],$_POST['dia']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel4();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    
    if (isset($_POST["añovendedor1"])) {
    
        
        $result = $objecta->GetVendedorVentas($_POST['vendedor1'],$_POST['añovendedor1']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel2();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    
    if (isset($_POST["añovendedor2"])) {
    
        
        $result = $objecta->GetVendedorVentasMes($_POST['vendedor2'],$_POST['añovendedor2'],$_POST['mes2']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel3();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    
    if (isset($_POST["añovendedor3"])) {
    
        
        $result = $objecta->GetVendedorVentas($_POST['vendedor3'],$_POST['añovendedor3']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel4();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    
?>
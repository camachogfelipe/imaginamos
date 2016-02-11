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
        if ($_POST["elegido"]!=0){
            $options = "";
            $result = $objecta->GetVendedor($_POST["elegido"]);
            for ($i = 0; $i < count($result); $i++) {
                 $options.= '<option value="'.$result[$i]['id_Usuario'].'">'.$result[$i]['nombre_Usuario'].'</option>';
            }
        }else{
           // echo "Hola";
            $options='Hola';
            $options.='<option value="">-SELECCIONE-</option>';
            $options.= '<option value="0">ALL</option>';
        }
        echo $options;
    }
    if (isset($_POST["elegido3"])) {
       if ($_POST["elegido3"]!=0){
        $options = "";
        $result = $objecta->GetVendedor($_POST["elegido3"]);
        $options = '<option value="seleccione">-- Seleccione vendedor --</option>';
        for ($i = 0; $i < count($result); $i++) {
              $options .= '<option value="'.$result[$i]['id_Usuario'].'">'.$result[$i]['nombre_Usuario'].'</option>';
        }
       }else{
           // echo "Hola";
            $options='';
            $options.='<option value="">-SELECCIONE-</option>';
            $options.= '<option value="0">ALL</option>';
        }
        echo $options;
    }
    
   if (isset($_POST["elegidoTi"])) {
    
        $options = "";
        $result = $objecta->GetTienda($_POST["elegidoTi"]);
        $result1 = $objecta->GetCredito($_POST["elegidoTi"]);
        $opt = $result1[0]['TotalCredito'];
        
        for ($i = 0; $i < count($result); $i++) {
              $options .= '
						<table cellpadding="0" cellspacing="0" border="0" class="display" >	
						<tr>
							<td width="80" align="justify"><label style="float: left;"><b>Vendedor:</b></label>
                                                        <input type="hidden" name="vendedor" id="vendedor" value="'.$result[$i]['id_Usuario'].'" class="large" /></td>
                                                        <td align="justify"><label style="float: left;">'.$result[$i]['nombre_Usuario'].'</label></td>
							</td>
						</tr>
						<tr>
							<td width="80" align="justify"><label style="float: left;"><b>TIENDA:</b></label></td>
                                                        <td align="justify"><label style="float: left;">'.$result[$i]['nombre_Tienda'].'</label></td>
						</tr>
						</table>
							';            
        }
        echo $options;
    }
    
    if (isset($_POST["elegidoTi1"])) {
        $options = "";
        $result = $objecta->GetTienda2($_POST["elegidoTi1"]);
        $result1 = $objecta->GetCredito($_POST["elegidoTi1"]);
        $opt = $result1[0]['TotalCredito'];
        
        for ($i = 0; $i < count($result); $i++) {
              $options .= '
						<table cellpadding="0" cellspacing="0" border="0" class="display" >	
						<tr>
							<td><label><b>Vendedor:</b></label>
                                                        <input type="hidden" name="vendedor" id="vendedor" value="'.$result[$i]['id_Usuario'].'"  /></td>
                                                        <td><label>'.$result[$i]['nombre_Usuario'].'</label></td>
							</td>
						</tr>
						<tr>
							<td><label><b>TIENDA:</b></label></td>
                                                        <td><label>'.$result[$i]['nombre_Tienda'].'</label></td>
						</tr>
						</table>
							';            
        }
        echo $options;
    }
    
    if (isset($_POST["elegido4"])) {
    
        $options = "";
        $result = $objecta->GetCredito($_POST["elegido4"]);
        $result2= $objecta->GetVentaCred($_POST["elegido4"]);
         $t=$result[0]['TotalComprados']-$result2[0]['tot'];
      //  echo $options = $result[0]['TotalCredito'];
       echo $option = $t;  
 
    }
    
     if (isset($_POST["elegido41"])) {
    
        $options = "";
       // $result = $objecta->GetCredito($_POST["elegido41"]);
        $result = $objecta->GetCredito($_POST["elegido41"]);
        $result2= $objecta->GetVentaCred($_POST["elegido41"]);
         $t=$result[0]['TotalComprados']-$result2[0]['tot'];
      //  echo $options = $result[0]['TotalCredito'];
       echo $option = $t;  
        //echo $options = $result[0]['TotalCredito'];
 
    }
    
    if (isset($_POST["adminelegido"])) {
        if ($_POST["adminelegido"]!=0){
               $options = "";
               $result = $objecta->GetChangeAdmin($_POST["adminelegido"]);
               for ($i = 0; $i < count($result); $i++) {
                    echo $options = '<option value="'.$result[$i]['id_Usuario'].'">'.$result[$i]['nombre_Usuario'].'</option>';
               }
       }else{
           // echo "Hola";
            $options='';
            $options.='<option value="">-SELECCIONE-</option>';
            $options.= '<option value="0">ALL</option>';
        }
    
        echo $options;
    }
    
    if (isset($_POST['ciudad'])) {
    echo '
    <option value="">-- Seleccione --</option>';

    $result = $objecta->GetCiudad($_POST['ciudad']);
    for ($i = 0; $i < count($result); $i++) {

        echo '<option value="' . $result[$i]["id_Ciudad"] . '">' . $result[$i]["nombre_Ciudad"] . '</option>';
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
                if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .= '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
            if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
            if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
             if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
             if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
             if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
    
    
     if (isset($_POST["añovencred1"])) {
         //$result = $objecta->GetVendedorVentas($_POST['vencred2'],$_POST['añovencred1']);
         $result = $objecta->GetCredAsigVen1($_POST['vencred1'],$_POST['añovencred1']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel2();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>Creditos</th>'.
                '<th>Precio</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
            if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['cantidad_Creditosc'].'</td>'.        
                '<td>$'.$result[$i]['cantidad_Creditosc'].'</td>'.
                '<td>'.$result[$i]['fecha_Credito'].'</td>'.
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
            if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
    
    if (isset($_POST["añovencred2"])) {
        
        
       // $result = $objecta->GetVendedorVentasMes($_POST['vencred2'],$_POST['añovencred2'],$_POST['mescred2']);
        
         $result = $objecta->GetCredAsigVen2($_POST['vencred2'],$_POST['añovencred2'],$_POST['mescred2']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel2();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>Creditos</th>'.
                '<th>Precio</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
            if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['cantidad_Creditosc'].'</td>'.        
                '<td>$'.$result[$i]['cantidad_Creditosc'].'</td>'.
                '<td>'.$result[$i]['fecha_Credito'].'</td>'.
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
            if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
    
    if (isset($_POST["añovencred3"])) {
    
        
        //$result = $objecta->GetVendedorVentas($_POST['vencred3'],$_POST['añovencred3']);
        
         $result = $objecta->GetCredAsigVen3($_POST['vencred3'],$_POST['añovencred3']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel2();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>Creditos</th>'.
                '<th>Precio</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
            if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['cantidad_Creditosc'].'</td>'.        
                '<td>$'.$result[$i]['cantidad_Creditosc'].'</td>'.
                '<td>'.$result[$i]['fecha_Credito'].'</td>'.
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
            if ($i%2==0){
                    $html .= '<tr>';
                }else{
                  $html .= '<tr class=\"odd gradeB\">';  
                }
                $html .='<td>'.$result[$i]['nombre_Tienda'].'</td>'.
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
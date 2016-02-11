<?php
/*ini_set('max_execution_time', 3600);
ini_set("memory_limit", "100M");
set_time_limit(0);*/
ini_set("display_errors", "on");
include("admin/core/class/db.class.php");
require_once'pdfs/html2pdf.class.php';
include( 'business/class/Correo.class.php' );
include( 'business/class/PHPMailer.class.php' );
$db = new Database();
$db->connect();
$db->doQuery("SELECT * FROM cotizaciones WHERE id=".$_REQUEST["user"], SELECT_QUERY);

$resultado = $db->results[0];

$id = explode("-", $_REQUEST["idf"]);
$cant = explode("-", $_REQUEST["cantidadf"]);
$iva = explode("-", $_REQUEST["ivaf"]);
$precio = explode("-", $_REQUEST["valoruf"]);
if ($resultado["ubicacion"] == "FBogot&aacute;") {
    $ubicacion = "Fuera de Bogot&aacute;";
} else {
    $ubicacion = "Bogot&aacute;";
}
$ivas = array();
$preciofinal = array();
for ($c = 0, $d = count($iva); $c < $d; $c++) {
    if ($iva[$c] == "no") {
        // $ivas[$c]=0;
        $total = ((int) $precio[$c] * (int) $cant[$c]);
        $iva1 = (int) $total / 1.16;
        $ivas[$c] = 0;
        $preciofinal[$c] = ((int) $total + (int) $ivas[$c]);
    } else {

        $total = (int) $precio[$c] * (int) $cant[$c];
        $iva1 = (int) $total / 1.16;
        $ivas[$c] = (int) $total - (int) $iva1;
        $preciofinal[$c] = ((int) $total + (int) $ivas[$c]);
    }
}
$condiciones = explode("%", $_REQUEST["cond"]);
$observaciones = explode("%", $_REQUEST["comnet"]);
$condfi = "";
$obserfi = "";
for ($j = 0, $h = count($condiciones); $j < $h; $j++) {
    $condfi .= $condiciones[$j]." ";
}
for ($e = 0, $r = count($observaciones); $e < $r; $e++) {
    $obserfi .= $observaciones[$e]." ";
}
if ($obserfi == "Observaciones ") {
    $obserfi = "";
}
if ($condfi == "Condiciones de venta ") {
    $condfi = "";
}

$dias = $_REQUEST["dias"];
$vali = $_REQUEST["validez"];
$condici = $_REQUEST["condiciones"];
$division = count($id) / 5;
$modular = count($id) % 5;
$bandera2 = 0;
$content="";
$hasdf=1;
$content .= ' <link href="css/norquimicos.css" rel="stylesheet" type="text/css" />
    <div id="preview">
        <div class="con-pre-cot">
        <div class="cotizacion-esq" style="margin-left:60px"><img src="imagenes/head-cotiza-bg.jpg"  width="900" height="345" align="center" alt=""></div>
             <div class="con-campos">
                <!--Expedición -->
                <div class="campo-1" style="font-size: 9px;margin-top:5px;color:#666;margin-left:50px" >'.date("Y-m-d").'</div>
                <!--Vencimiento-->
                <div class="campo-2" style="margin-left:100px">'.$vali.'</div>
                <!--Cot. No-->
                <div class="campo-3" style="font-size: 9px;margin-top:5px;color:#666;margin-left:100px">'.rand(0, 999999).'</div>
                <!--Señores-->
                <div class="campo-4" style="font-size: 9px;margin-top:5px;color:#666;margin-left:100px">'.$resultado["nombre"].'</div>
								<!--NIT-->
                <div class="campo-4-nit" style="font-size: 9px;margin-top:5px;color:#666;margin-left:100px">'.$resultado["cedula"].'</div> 
                <!--Dirección-->
                <div class="campo-5" style="font-size: 9px;margin-top:5px;color:#666;margin-left:100px">'.$resultado["direccion"].'</div>
                <!--Entrega  (Nuevo) -->
                <div class="campo-6" style="font-size: 9px;margin-top:5px;color:#666;margin-left:100px">'.$dias.'</div> 
                <!--Teléfono-->
                <div class="campo-7" style="font-size: 9px;margin-top:5px;color:#666;margin-left:100px">'.$resultado["telefono"].'</div>
                <!--Ciudad-->
                <div class="campo-8" style="font-size: 9px;margin-top:5px;color:#666;margin-left:100px">'.$ubicacion.'</div>
                <!--E-mail-->';
                
  $content.= '<div class="campo-9" style="font-size: 9px;margin-top:5px;color:#666;margin-left:100px">'.$resultado["email"].'</div>
                <!--Listado productos-->';
  
  $content.= '<table width="110%" id="customers" style="margin-left:80px;margin-top:350px;" aling=center> ';
  $content.= '<tr>
              <th class="tit" >REFERENCIA</th>
              <th class="tit">CANT.</th>
              <th class="tit">PRESENTACION</th>
              <th class="tit">DESCRIPCION DEL PRODUCTO</th>
              <th class="tit">IMAGEN/FOTO</th>
              <th class="tit">IVA</th>
              <th class="tit">VR. UNITARIO</th>
              <th class="tit">VR. TOTAL</th>
             </tr>';
						 
  
 for ($bandera = 0; $bandera < count($id); $bandera++) {
     if (isset($id[$bandera])) {
			 $db->doQuery("SELECT referencia, presentacion, nombre, img, texto FROM productos WHERE id=" . $id[$bandera], SELECT_QUERY);
			 $prod = $db->results[0];
			 if ($iva[$bandera] == "no") $vi='';
			 else $vi='16%';
			 $cla='class="alt"';
			 $content.='<tr>';
			 $content.='<td '.$cla.'><div class="ct10" style="font-size: 13px; text-align:center">'.$prod["referencia"].'</div></td>
			 	<td><div class="ct20" style="font-size: 13px; text-align:center">'.$cant[$bandera].'</div></td>
				<td '.$cla.'><div class="ct30" style="font-size: 13px; text-align:center">'.$prod["presentacion"].'</div></td>
				<td><div class="ct40" style="font-size: 9px;"><p>'.$prod["nombre"].'</p>'.$prod['texto'].'</div></td>
				<td '.$cla.'><div class="ct50" style="font-size: 9px; text-align:center"><img src="imagenes/productos/'.$prod["img"].'" width="130" height="70"></div></td>
				<td><div class="ct60" style="font-size: 12px; text-align:center">'.$vi.'</div></td>
				<td '.$cla.'><div class="ct70" style="font-size: 12px; text-align:center">$ ' . number_format($precio[$bandera],0,'.','.') . '</div></td>
				<td><div class="ct80" style="font-size: 12px; text-align:center">$ ' . number_format($preciofinal[$bandera],0,'.','.') . '</div></td>';
				$content.='</tr>';
     }
}

if($bandera)

 $content.= '</table> ';
  
 
 $content.= '<div class="campo-10">
                    <!--Observaciones-->
                <div class="campo-18" style="margin-left:60px"><img src="imagenes/foot-cotiza-bg.jpg" width="800" alt=""></div>
                <div class="campo-111" style="font-size: 9px;color:#666;margin-left:20px" id="camp111">' . $condici . '</div>
                <!--Condiciones-->
                
                <!--Aceptada-->
                <div style="font-size: 9px;margin-top:4px;color:#666margin-left:60px;" class="campo-13"></div>
                <!--Sello-->
                <div style="font-size: 9px;margin-top:4px;color:#666;margin-left:60px" class="campo-14"></div>
                <!--Subtotal-->
                <div class="campo-151" style="font-size: 14px;color:#666;margin-left:20px" id="subtotje"><strong>$ ' . number_format($_REQUEST["subenviototal1"],0,'.','.') . '</strong></div>
                <!--IVA-->
                <div class="campo-161" style="font-size: 14px;color:#666;margin-left:20px" id="ivaje"><strong>$ ' . number_format($_REQUEST["ivatotal1"],0,'.','.') . '</strong></div>
                <!--Total-->
                <div class="campo-171" style="font-size: 14px;color:#666;margin-left:20px" id="campsfinals"><strong>$ ' . number_format($_REQUEST["totaltotal1"],0,'.','.') . '</strong></div>
                 </div>   
                 </div> 
          </div> 
    </div>';


//echo "INSERT INTO consulta_final (id_cotizacion, asesor, email, valor_cotizacion, telefono, celular, comentario, condiciones, fecha), VALUES ('".$_REQUEST['user']."', '".$_SESSION["Nombre"]."', '".$resultado["email"]."', ".$_REQUEST["totaltotal1"].", '".$resultado["telefono"]."', '".$resultado["celular"]."', '', '".$_REQUEST['Validez']."', '".date("Y-m-d")."')<br><br>";

//echo "UPDATE cotizaciones SET estado=completo WHERE id=".$_REQUEST["user"]."";


$db->doQuery("INSERT INTO consulta_final (id_cotizacion, asesor, email, valor_cotizacion, telefono, celular, comentario, condiciones, fecha) VALUES ('".$_REQUEST['user']."', '".$_SESSION["Nombre"]."', '".$resultado["email"]."', '".$_REQUEST["totaltotal1"]."', '".$resultado["telefono"]."', '".$resultado["celular"]."', '', '".$_REQUEST['Validez']."', '".date("Y-m-d")."')", INSERT_QUERY);

$db->doQuery("UPDATE cotizaciones SET estado='completo' WHERE id=".$_REQUEST["user"], UPDATE_QUERY);


$html2pdf = new HTML2PDF('P', 'A3', 'fr');
$html2pdf->WriteHTML($content);
//$html2pdf->Output('PDFCotizacion.pdf');
$html2pdf->Output('imagenes/pdfs/PDFUSER'.$_REQUEST["user"].'.pdf', 'F'); //


//$db->doQuery("SELECT * FROM cotizaciones WHERE id=".$_REQUEST["user"], SELECT_QUERY);
//$resultado = $db->results[0];
//para el cotizante
$body = '
            <img src="imagenes/logo.png">
            <br><br>
            <h1><font style="font-size: 33px;" color="#7ebe57">Cotizaci&oacute;n realizada</font></h1><br>
            Hola '.$resultado["nombre"].'<br>   <br>   
           Tu solicitud de cotizaci&oacute;n ha sido realizada correctamente<br>
            Para ver y descargar la cotizaci&oacute;n haga click aqu&iacute;: <a href="http://www.norquimicos.com.co/imagenes/pdfs/PDFUSER'.$_REQUEST["user"].'.pdf">PDF</a><br><br>            
            Para m&aacute;s informaci&oacute;n ingrese a : <a href="http://norquimicos.com.co/">Norquimicos</a>
              <br><br><br><br>
            Gracias.
            <br><br>
            Dr: CARRERA 56 A No 4D-19<br>
            TEL: <a href="+57(1)4143089">+57(1)4143089</a><br>
            FAX: <a href="+57(1)4143938">+57(1)4143938</a><br><br>
             <a href="www.norquimicos.com.co">www.norquimicos.com.co </a><br>
            Bogota - Colombia - South America.
            <br><br>
           <img src="imagenes/skype12.png"> norquimicos.ltd
           <img src="imagenes/facebook12.png">/norquimicos.ltda
           <img src="imagenes/twitter12.png">@norquimicos.ltda
           <img src="imagenes/bb12.png">29E958F9
           ';
$asunto = utf8_decode("Solicitud de cotización");
$cCorreo = new Correo();
$cCorreo->SendEmail($resultado["email"], $asunto, $body);

$db->doQuery("SELECT * FROM user WHERE id=" . $_REQUEST["asesor"], SELECT_QUERY);
$je = $db->results[0];
$body1 = '
    
<img src="imagenes/logo.png">
            <br><br>
            <h1><font style="font-size: 33px;" color="#7ebe57">Cotizaci&oacute;n realizada</font></h1><br>
            Hola ' . $je["nombre"] . '<br>   <br>   
           Tu solicitud de cotizaci&oacute;n ha sido realizada correctamente<br>
            Para ver y descargar la cotizaci&oacute;n haga click aqu&iacute;: <a href="http://www.norquimicos.com.co/imagenes/pdfs/PDFUSER' . $_REQUEST["user"] . '.pdf">PDF</a><br><br>            
            Para m&aacute;s informaci&oacute;n ingrese a : <a href="http://www.norquimicos.com.co/">Norquimicos</a>
              <br><br><br><br>
            Gracias.
            <br><br>
            Dr: CARRERA 56 A No 4D-19<br>
            TEL: <a href="+57(1)4143089">+57(1)4143089</a><br>
            FAX: <a href="+57(1)4143938">+57(1)4143938</a><br><br>
             <a href="www.norquimicos.com.co">www.norquimicos.com.co </a><br>
            Bogota - Colombia  South America.
            <br><br>
           <img src="imagenes/skype12.png"> norquimicos.ltd
           <img src="imagenes/facebook12.png">/norquimicos.ltda
           <img src="imagenes/twitter12.png">@norquimicos.ltda
           <img src="imagenes/bb12.png">29E958F9

            
';

$asunto1 = utf8_decode("Cotizacion");
$cCorreo1 = new Correo();
$cCorreo1->SendEmail($je["correo"], $asunto1, $body1);

echo "<script>alert('Cotización Enviada'); window.location.href = 'index.php?seccion=zonasegura&comp'</script>";   //mensaje creado
/*echo "<script>window.location.href = 'index.php?seccion=completado&id=".$_REQUEST["user"]."'</script>";    //mensaje creado*/
?>
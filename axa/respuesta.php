<?php
session_start();
error_reporting(E_ALL);
//ini_set("display_errors", 0);

require_once "Mail.php";
require_once("Mail/mime.php");
include 'php/dao/daoConnection.php';
include 'php/dao/ventaDAO.php';
include 'php/entities/venta.php';
include 'php/dao/pasajeroDAO.php';
include 'php/entities/pasajero.php';
include 'php/dao/PlanDAO.php';
include 'php/entities/Plan.php';
include 'php/dao/paisDAO.php';
include 'php/entities/pais.php';
//require 'php/functions/class.phpmailer.php';
//require_once 'php/class/Correo.class.php';
require 'fpdf/fpdf.php';

$ventaDAO = new ventaDAO;
$venta = new venta;

$pasajeroDAO = new pasajeroDAO;

$planDAO = new PlanDAO;

$paisDAO = new paisDAO;
?>
<!DOCTYPE html>
<!--http://tarjetasdeasistencia-axa.com/respuesta_img.php?firma=35629a56b0df8bb44e7f2c9eaa31175d&ref_venta=60&fecha_procesamiento=2012-06-16&estado_pol=4&codigo_respuesta_pol=1-->
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>AXA</title>

<meta name="description" content=" Encuentra los puntos Wifi ETB más cercanos y navega desde cualquier sitio. ">

<meta name="keywords" content=" wifi, zonas, etb, internet, sin cables, navega, mapa, velocidad, sitio, conectate, ciudad, navegacion, puntos, direccion" >

<link rel="icon" type="image/gif" href="images/layout/favicon.ico" />
<link rel="shortcut icon" href="images/layout/favicon.ico" />


<!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>-->

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/actions-botones.js" type="text/javascript"></script>
    <script src="js/chat.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
   

<style type="text/css">
.error {
font-size:26px;
font-weight:bold;
color:#000;
position:absolute;
float:left;
margin-top:150px;
}


</style>
<?php include ('analytics.php');?>
</head>

<body>

<?php
//ventas:60-pasajero:145
$llave="137e2eab080";
$usuario_id=$_REQUEST['usuario_id'];
$ref_venta=$_REQUEST['ref_venta'];
$valor=$_REQUEST['valor'];
$moneda=$_REQUEST['moneda'];
$estado_pol=$_REQUEST['estado_pol'];
$firma_cadena= "$llave~$usuario_id~$ref_venta~$valor~$moneda~$estado_pol";echo $firmacreada = md5($firma_cadena);
//ejemplo : ?usuario_id=577&ref_venta=AXA_12_168_520&valor=728080&moneda=COP&estado_pol=4&fecha_procesamiento=2013-11-21&codigo_respuesta_pol=1
//firma que generaron ustedes
$firma =$_REQUEST['firma'];//firma que env�a nuestro sistema
$ref_venta=$_REQUEST['ref_venta'];
$fecha_procesamiento=$_REQUEST['fecha_procesamiento'];
$ref_pol=$_REQUEST['ref_pol'];
$cus=$_REQUEST['cus'];
$extra1=$_REQUEST['extra1'];
$banco_pse=$_REQUEST['banco_pse'];
if($_REQUEST['estado_pol'] == 6 && $_REQUEST['codigo_respuesta_pol'] == 5)
{$estadoTx = "Transacci&oacute;n fallida";}
else if($_REQUEST['estado_pol'] == 6 && $_REQUEST['codigo_respuesta_pol'] == 4)
{$estadoTx = "Transacci&oacute;n rechazada";}
else if($_REQUEST['estado_pol'] == 12 && $_REQUEST['codigo_respuesta_pol'] == 9994)
{$estadoTx = "Pendiente, Por favor revisar si el d&eacute;bito fue realizado en el Banco";}
else if($_REQUEST['estado_pol'] == 4 && $_REQUEST['codigo_respuesta_pol'] == 1)
{
	$estadoTx = "Transacci&oacute;n aprobada";
	$venta->setPagoonlinetbl_ventas('SI');
	$venta->setReftbl_ventas($ref_venta);
	$refpol_venta = explode('_',$ref_venta);
	$ref_final = $ref_pol.$refpol_venta[1].$refpol_venta[2].$refpol_venta[3];	
	$venta->setRefTransacciontbl_ventas($ref_final);
	//echo $ref_venta.' ////';
	//echo $ref_final.' kljhlkgkhg';print_r($venta);
	//$update = true;
	$update = $ventaDAO->updatePago($venta);
	if ($update)
	{
		class PDF extends FPDF
		{
			// Cabecera de p�gina
			/*function Header()
			{
				// Logo
				$this->Image('http://tarjetasdeasistencia-axa.com/images/layout/logo.png',10,5,50,15);
				// Arial bold 15
				$this->SetFont('Arial','B',15);
				// Movernos a la derecha
				$this->Cell(80);
				// T�tulo
				$this->Cell(30,40,'AXA ASISTENCIA COLOMBIA CERTIFICA',0,0,'C');
				// Salto de l�nea
				$this->Ln(30);
			}*/
			
			// Pie de p�gina
			function Footer()
			{
				// Posici�n: a 1,5 cm del final
				$this->SetY(-15);
				// Arial italic 8
				$this->SetFont('Arial','I',7);
				// N�mero de p�gina
				$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
			}
			function ChapterBody($file)
			{
				// Leemos el fichero
				$txt = file_get_contents($file);
				// Times 12
				$this->SetFont('Times','',7);
				// Imprimimos el texto justificado
				$this->MultiCell(0,3,$txt);
				// Salto de l�nea
				$this->Ln();
				// Cita en it�lica
				$this->SetFont('','I');
				$this->Cell(0,5,'(fin del extracto)');
			}
			
			function PrintChapter($num, $title, $file)
			{
				$this->AddPage();
				$this->ChapterBody($file);
			}
		}
		$listaArchivo = $ventaDAO->getbyReftrans($ref_final);
			echo "<br>";
			print_r($listaArchivo);
			echo "<br>";
		$listaPasajeros = $pasajeroDAO->gets(0,2000);
		$nombrecsv = $ref_final.date('Ymd') .".csv";
		$csvName =  'csv/'.$nombrecsv;
		$fileHandle = fopen($csvName, 'w') or die('Can\'t create .csv file, try again later.');
		$k = 0;
		foreach ($listaArchivo as $datos)
		{
				$pajero = $pasajeroDAO->getById($datos->getTbl_pasajeros_idtbl_pasajeros());
				$nombres = $pajero->getNombretbl_pasajeros().' '.$pajero->getApellidostbl_pasajeros();
				$identificacion = $pajero->getIdenteficaciontbl_pasajeros();
				$email = $pajero->getEmailtbl_pasajeros();
				$nacimiento = $pajero->getFechanacimientotbl_pasajeros();
				$edad = $pajero->getEdad();
				$plan = $planDAO->getPlan($datos->getTbl_plan_idtbl_plan());
				$nombreplan = utf8_decode($plan->getDescripciontbl_plan());
				$pais = $paisDAO->getpais($datos->getTbl_destino_idtbl_destino());
				$nombrepais = ($pais->getDescripciontbl_destino());
				$fecha_salida = $datos->getFechasalidatbl_ventas();
				$fecha_regreso = $datos->getFecharegresotbl_ventas();
				$idplan = $datos->getTbl_plan_idtbl_plan();
				$certificacion = $datos->getRefTransacciontbl_ventas();
				if ($idplan == 1 || $idplan == 10)
				{
					$fecha_salidapdf = 'Fecha inicio plan: '.$datos->getFechasalidatbl_ventas();
					$fecha_regresopdf = 'Fecha fin plan: '.$datos->getFecharegresotbl_ventas();
				}
				else
				{
					$fecha_salidapdf = 'Fecha de salida: '.$datos->getFechasalidatbl_ventas();
					$fecha_regresopdf = 'Fecha de regreso: '.$datos->getFecharegresotbl_ventas();
				}
				if ($idplan==1)
				{
					$imgcobertura = 'America.jpg';
				}
				if ($idplan==2)
				{
					$imgcobertura = 'Plan_Multiviajes_30_Dias.jpg';
				}
				if ($idplan==3)
				{
					$imgcobertura = 'Larga_Estadia.jpg';
				}
				if ($idplan==4)
				{
					$imgcobertura = 'Clasico.jpg';
				}
				if ($idplan==5)
				{
					$imgcobertura = 'Turista_Economico.jpg';
				}
				if ($idplan==6)
				{
					$imgcobertura = 'Turista_Mundial.jpg';
				}
				if ($idplan==7)
				{
					$imgcobertura = 'Europa_y_Resto_del_Mundo.jpg';
				}
				if ($idplan==8)
				{
					$imgcobertura = 'Golden.jpg';
				}
				if ($idplan==9)
				{
					$imgcobertura = 'Estudiantil.jpg';
				}
				if ($idplan==10)
				{
					$imgcobertura = 'Plan_Multiviajes_60_Dias.jpg';
				}
				if ($idplan==12)
				{
					$imgcobertura = 'schengen.png';
				}
				$diasviaje = $datos->getDiasviajetbl_ventas();
				$canal = $datos->getCanalventatbl_ventas();
				$fechaventa = $datos->getFechaventatbl_ventas();
				$valor = $datos->getValortbl_ventas();
				$observaciones = $datos->getObservacionestbl_ventas();
				$terminos = $datos->getTerminostbl_ventas();
				$redencion = $datos->getRedencion();
					
				
				$elCSV = utf8_decode($nombres).",".$identificacion.",".$email.",".$nacimiento.",".$edad.",".($nombreplan).",".($nombrepais).",".$fecha_salida.",".$fecha_regreso.",".$diasviaje.",".($canal).",".$fechaventa.",".$valor.",".($observaciones).",".$terminos.",".$ref_final.",".$redencion.",".$listaPasajeros." \n ";
    		fwrite($fileHandle, $elCSV);
				#creaci�n PDF certificado asistencia
				// Creaci�n del objeto de la clase heredada
				$pdf = new PDF();
				$pdf->AliasNbPages();
				$pdf->AddPage();
				$pdf->Image('http://tarjetasdeasistencia-axa.com/images/pdf/'.$imgcobertura,75,58,50,40);
				$pdf->Image('http://tarjetasdeasistencia-axa.com/images/pdf/Telefono.png',40,168,120,22);
				$pdf->Image('http://tarjetasdeasistencia-axa.com/images/pdf/Firma.png',10,268,60,18);
				$pdf->Image('http://tarjetasdeasistencia-axa.com/images/layout/logo.png',10,5,50,15);
				$pdf->SetFont('Arial','B',15);
				$pdf->Cell(80);
				$pdf->Cell(30,40,'AXA ASISTENCIA COLOMBIA CERTIFICA',0,0,'C');
				$pdf->Ln(30);
				$pdf->SetFont('Times','',10);
				$pdf->MultiCell(0,5,'Que '.utf8_decode($nombres.'  con identificación No. '.$identificacion.' cuenta con el servicio de asistencia médica en el exterior por adquirir la tarjeta de asistencia respaldada por Inter Partner Assistance, con el plan ').($nombreplan).utf8_decode(' radicado bajo el número '.$ref_final.' y con las siguientes condiciones:'),0,'J');
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				
				$pdf->Cell(0,5,utf8_decode('La asistencia se prestará durante los primeros '.$diasviaje.' días de viaje a partir de la fecha de salida del país y con destino a: '),0,1);
				$pdf->Cell(0,5,($nombrepais),0,1);
				$pdf->Cell(0,5,$fecha_salidapdf,0,1);
				$pdf->Cell(0,5,$fecha_regresopdf,0,1);
				$txt = 'Las condiciones generales, límites de cobertura, excepciones y restricciones de los servicios de asistencia están a su ';
				$txt .= 'disposición en la página web www.tarjetasdeasistencia-axa.com, las cuales usted declara haber leído, atendido y aceptado. Las ';
				$txt .= 'coberturas serán aplicables durante el viaje que realice dicho Beneficiario dentro del Período-Vigencia y demás condiciones ';
				$txt .= 'establecidas para cada plan. El Beneficiario declara que al momento de la compra ha elegido el tipo de tarjeta y ha ';
				$txt .= 'aceptado los términos, condiciones y exclusiones para cada servicio de asistencia. Los servicios de asistencia serán ';
				$txt .= 'prestados de acuerdo con las definiciones y consideraciones particulares y en situación de emergencia descritos para cada ';
				$txt .= 'prestados de acuerdo con las definiciones y consideraciones particulares y en situación de emergencia descritos para cada ';
				$txt .= 'plan, por lo tanto no se configura como seguro médico, ni tiene como objeto la previsión o cuidado de salud.';
				$txt .= 'Frente a una situación de emergencia, comunicarse de inmediato con la central de alarma de Inter Partner más ';
				$txt .= 'cercana, las 24 horas del día.';
				$pdf->MultiCell(0,5,utf8_decode($txt),0,'J');
				
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				$pdf->Cell(0,5,'',0,1);
				
				$pdf->SetFont('Times','',8);
				$pdf->Cell(0,5,utf8_decode('* Los números telefónicos están sujetos a los cambios de codificación en cada país.'),0,1); 
				$pdf->SetFont('Times','',10);
				$pdf->Cell(0,5,utf8_decode('Para acceder a los servicios de asistencia son requerimientos indispensables:'),0,1);
				$pdf->Cell(0,5,utf8_decode('1. Comunicarse con la central de alarma en el momento de la emergencia.'),0,1);
				$pdf->MultiCell(0,5,utf8_decode('2. Enviar a la central de alarma en Colombia fotocopia completa del pasaporte, donde figuren las fechas de salida y demás documentos que se soliciten.'),0,'J');
				$pdf->Cell(0,5,utf8_decode('3. La asistencia se prestarán en el tiempo y de acuerdo con el plan adquirido.'),0,1);
				$pdf->Cell(0,5,utf8_decode('4. El valor de la cobertura corresponde al monto equivalente de la moneda legal vigente de cada país donde'),0,1);
				$pdf->Cell(0,5,utf8_decode('se preste el servicio de asistencia.'),0,1);
				$pdf->Cell(0,5,utf8_decode('Este certificado se expide en Colombia el día '.date("d").' de '.mes().' de '.date("Y").' a solicitud del interesado y de acuerdo con'),0,1);
				$pdf->Cell(0,5,utf8_decode('el decreto 2150 de 5 de diciembre de 1995 no requiere autenticación para su validez.'),0,1);
				$pdf->MultiCell(0,5,utf8_decode('Con el recibo de la tarjeta de asistencia el beneficiario declara haber recibido, conocido y aceptado las condiciones del contrato de asistencia.'),0,'J');
				$pdf->Cell(0,5,'',0,1);
				$pdf->SetFont('Times','',7);
				$pdf->Cell(0,5,'Venta por cuenta de Inter Partner Assistance (IPA) - Servicios en el exterior.',0,1);
				$pdf->PrintChapter(1,'','fpdf/asistencia.txt');
				$prefijo = substr(md5(uniqid(rand())),0,6);
				$fileName = 'Asistencia_axa.pdf';
				$namefile[$k] = $prefijo."_".$fileName;
				$destinopdf[$k] = 'docpdf/'.$namefile[$k];
				$content = $pdf->Output($destinopdf[$k],'F');
				# fin creacion PDF certificado de asistencia
				$k++;
		}
		fclose($fileHandle);
		
		# envio de .csv a AXA
		$from = "AXA ASISTENCIA COLOMBIA S.A <planes@tarjetasdeasistencia-axa.com>";
		$to = "bdclientes@axa-assistance.com.co, marketing@axa-assistance.com.co";
		$bcc = array("marisol.arenas@axa-assistance.com.co", "marisolarenasb@gmail.com", "planes@tarjetasdeasistencia-axa.com");
		$subject = "45086\r\n\r\n";
		$body = "45086";
		$html = '<html><body>45086</body></html>';
		 
		$host = "mail.tarjetasdeasistencia-axa.com";
		$username = "planes@tarjetasdeasistencia-axa.com";
		$password = "Usuario2011";
		 
		$headers = array ('From' => $from,
			'To' => $to,
			'Bcc' => $bcc,
			'Subject' => $subject);

		$mime = new Mail_mime();
	
		$mime->setTXTBody($body);
		$mime->setHTMLBody($html);
		$mime->AddAttachment(realpath($csvName),mime_content_type($nombrecsv));
		
		$body = $mime->get();
		$headers = $mime->headers($headers);	
		 
		$smtp = Mail::factory('smtp',
			array ('host' => $host,
				'auth' => true,
				'username' => $username,
				'password' => $password));
		 
		$mail = $smtp->send($to.",".implode(",", $bcc), $headers, $body);
		print_r($smtp);
		if (PEAR::isError($mail)) {
			echo("<p>" . $mail->getMessage() . "</p>");
		} else {
			echo("<p>Message successfully sent!</p>");
		}
		# FIN envio .csv a AXA
		
		# envio certificado asistencia a cliente
		$message ='<div>';
		$message .= '<img src="http://tarjetasdeasistencia-axa.com/images/logo.jpg" title="Axa-Logo"/><br/>';
		$message .= 'Gracias por su compra. <br />Adjunto a este correo encontrara el certificado de la compra, debe imprimir y conservar este <br />certificado.<br />';
		$message .= '<p style="color:#666; font-size:8px">Copyright 2010 - Axa Assistance Colombia- Todos los Derechos Reservados</p>' ;
		$message .='<div align="center">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: 10px 0px 0px 0px; padding: 10px 0px 0px 0px; border-top: 1px solid #168893">
						<tr>
							<td>
								<span style="height: 40px;line-height: 40px;width: 260px;position: relative;margin: 0px 0px 0px 0px; float:right">
									<span style="background: url(http://www.imaginamos.com/derechos_autor_gris/ahorranito-2.png) no-repeat 0px 0px;width: 21px;height: 22px;display: block;float: left;margin: 9px 10px 0px 0px;">
									</span>
									<a href="http://www.imaginamos.com" style="font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">Creado por: 
									</a>
									<a href="http://www.imaginamos.com" style="font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">imagin<span style="color: #0CF;">a</span>mos.com
									</a>
									</span>
									</td>
						</tr>
					</table>
					</div>
				   </div>
		';
		$from = "AXA ASISTENCIA COLOMBIA S.A <planes@tarjetasdeasistencia-axa.com>";
		$to = $email;
		$cc = 'marketing@axa-assistance.com.co';
		$bcc = array("marisol.arenas@axa-assistance.com.co", "marisolarenasb@gmail.com", "planes@tarjetasdeasistencia-axa.com");
		$subject = "Certificado Compra Online - AXA ASISTENCIA COLOMBIA S.A\r\n\r\n";
		$body = "<strong>Mensaje</strong><br><br>";
		$body.= wordwrap($message, 70)."<br>";
		
		$html = $body;
		$body = strip_tags($body);
		 
		$host = "mail.tarjetasdeasistencia-axa.com";
		$username = "planes@tarjetasdeasistencia-axa.com";
		$password = "Usuario2011";
		 
		$headers = array ('From' => $from,
			'To' => $to,
			'Cc' => $cc,
			'Bcc' => $bcc,
			'Subject' => $subject);
		
		$mime = new Mail_mime();
	
		$mime->setTXTBody($body);
		$mime->setHTMLBody($html);
		for ($j = 0; $j<count($destinopdf);$j++)
		{
			$mime->AddAttachment(realpath($destinopdf[$j]),mime_content_type($destinopdf[$j]),$namefile[$j]);	
		}
		$mime->AddAttachment(realpath("./images/Condiciones Generales.doc"), "Condiciones Generales.doc");
		
		$body = $mime->get();
		$headers = $mime->headers($headers);	
		 
		$smtp = Mail::factory('smtp',
			array ('host' => $host,
				'auth' => true,
				'username' => $username,
				'password' => $password));
		 
		$mail = $smtp->send($to.",".$cc.",".implode(",", $bcc), $headers, $body);
		 
		if (PEAR::isError($mail)) {
			echo("<p>" . $mail->getMessage() . "</p>");
		} else {
			echo("<p>Message 2 successfully sent!</p>");
		}exit("Se proceso la venta");
		# FIN envio certificado asistencia a cliente
	}
}
else
{$estadoTx=$_REQUEST['mensaje'];}
if(strtoupper($firma)==strtoupper($firmacreada)){//comparacion de las firmas para comprobar que los datos si vienen de Pagosonline*/
?>
<!-- Google Code for Compra Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1000339920;
var google_conversion_language = "es";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "9emGCNiqngMQ0PP_3AM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1000339920/?value=0&amp;label=9emGCNiqngMQ0PP_3AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

 <script>
	$(document).ready(function(){
		$.fancybox({
				'href'              : '#inline1',
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'showCloseButton'   : 'false',
				'modal'				: 'true'
			});
		
		})
	</script>
<header>
	<div id="logo"> <a href="index.php"><img src="images/layout/logo.png" /></a>
    </div>
    <div id="copy_home">
    	<h1>
        	<p class="copy_grande">Escoge la opci&oacute;n que m&aacute;s se acerque a tus necesidades.</p>
            <!--<p class="copy_peque">Adquiere tu tarjeta de asistencia en 3 simples pasos. �te tomar&aacute; menos de 5 minutos!</p>-->
        </h1>
    </div>
</header>


<section class="contenedor_contenido">

<div class="contenedr_botones_grande">

	<div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p><a class="planes_rojos" href="index.php">Viajas a Europa de Vacaciones?</a></p>
            </div>
        </div>
    </div>
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p  style="margin-top:26px"><a class="planes_rojos" href="index2.php?idplan=8">Eres mayor de 65 a&ntilde;os?</a></p>
            </div>
        </div>
    </div>
</div>    
    

<div class="contenedr_botones_grande">    
    
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p><a class="planes_rojos" href="index_2.php">Viajas a otra parte del Mundo?</a></p>
            </div>
        </div>
    </div>
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p><a class="planes_rojos" href="index_3.php">Viajas por m&aacute;s de 6 meses?</a></p>
            </div>
        </div>
    </div>
    
</div>    


<div class="contenedr_botones_grande">
    
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p>
                	<!--<a class="planes_rojos" href="index2.php?idplan=2">Vas a viajar m�s de 2 veces al a�o?</a>-->
                    <a class="planes_azules" href="#inline1" id="various1">Vas a viajar m&aacute;s de 2 veces al a&ntilde;o?</a>
                    </p>
            </div>
        </div>
    </div>
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p style="color:#113182; margin-top:26px"><a class="planes_azules" href="index6.php">Ver todos los planes</a></p>
            </div>
        </div>
    </div>

</div>
   
   
</section>
<div style="display: none;">
		<div id="inline1" style="width:700px;height:700px;overflow:auto;">
			<center>
            <table width="500" border="0" cellspacing="0" cellpadding="0" >
            <tr>
            <th width="100%" scope="col"><h1>Los datos de tu transacci&oacuten son los siguientes</h1>
            <br />
            </tr>
            <td>
            
            <a href="http://www.pagosonline.com/" target="_blank"><img src="http://www.pagosonline.com/logos/images/transgrande_03_460x60.png" alt="j" width="460" height="60" border="0" /></a>
            <br />
            <table align="center"  width="%100" border="0">
            <tr>
            <td><h3>Fecha de procesamiento</h3></td>
            <td><h2><?php echo $fecha_procesamiento; ?></h2></td>
            </tr>
            <tr>
            <td><h3>Estado de la transacci&oacute;n</h3></td>
            <td><h2><?php echo $estadoTx; ?> </h2></td>
            </tr>
            <tr>
            <td><h3>referencia de la venta </h3></td>
            <td><h2><?php echo $ref_venta; ?></h2> </td> </tr>
            <tr>
            <td><h3>Referencia de la transaccion </h3></td>
            <td><h2><?php echo $ref_pol; ?> </h2></td>
            </tr>
            <tr>
            <?php
            if($banco_pse!=null){
            ?>
            <tr>
            <td><h3>cus </h3></td>
            <td><h2><?php echo $cus; ?></h2> </td>
            </tr>
            <tr>
            <td><h3>Banco</h3> </td>
            <td><h2><?php echo $banco_pse; ?></h2> </td>
            </tr>
            <?php
            }
            ?>
            <tr>
            <td><h3>Valor total</h3></td>
            <td><h2><?php echo number_format($valor); ?> </h2></td>
            </tr>
            <tr>
            <td><h3>moneda</h3> </td>
            <td><h2><?php echo $moneda; ?></h2></td>
            </tr>
            </table>
            
            
            <div align="center"><a href="#" onClick="window.print();">Imprimir</a></div><br />
            <br /> <br />
            
            <h2 align="center">Si tiene alguna duda acerca de esta transacci&oacuten por favor cumun&iacutequese con nuestro departamento de servicio al cliente.</h2>
            <div align="center">
            
            <h1 align="center">Gracias por comprar con nosotros! </h1>
            <div align="center">
            
            
            <h4><br />
            <span class="Estilo2"><a href="http://tarjetasdeasistencia-axa.com/index5.php">Ver otros productos</a></span></h4>
            </div></td>
            
            </tr>
            </table>
            </center>
            <br />
            <center>
            <h1>Gracias por su compra!</h1>
            <br />
            <p><a href="index5.php">Cerrar</a></p>
            </center>
		</div>
</div>

<?php 
include ('footer.php');
?>


<?php
}else{
?>

<h1 class="error">Error validando firma digital.</h1>

<?php
}
                /*
                $mail = new PHPMailer();
                
                $mail->IsSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'mail.tarjetasdeasistencia-axa.com';  // Specify main and backup server
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'planes@tarjetasdeasistencia-axa.com';                            // SMTP username
                $mail->Password = 'Usuario2011';                           // SMTP password

		$mail->AddAttachment($csvName,$nombrecsv);
		$mail->Host = "localhost";
		$mail->From = "mailto:noreply@tarjetasdeasistencia-axa.com";
		$mail->FromName = "AXA";
		$mail->Subject = '45086';
		$mail->AddAddress('bdclientes@axa-assistance.com.co');
		$mail->AddBCC('marketing@axa-assistance.com.co');
                $mail->AddBCC('planes@tarjetasdeasistencia-axa.com');
                $mail->AddBCC('diana.sandoval@imaginamos.com.co');
                $mail->AddBCC('marisolarenasb@gmail.com');
                $mail->AddBCC('sandoval.ing2005@gmail.com');
                $mail->AddBCC('sandoval_ing@yahoo.es'); 
                $mail->AddBCC('sandovaldiana@unbosque.edu.co');
                $mail->AddBCC('marketing@axa-assisatnce.com.co');
		$mail->Body = 'Esto es un correo de prueba, sigue la falla en el ambiente de pruebas Pagos Online, pero estoy probando que la libreria funcione, porfavor verificar si estan llegando los correos, Muchas Gracias ! ';
		$mail->IsHTML(true);
		$mail->Send();
                
                if(!$mail->Send()){
                    echo "No se pudo enviar el Mensaje.";
                 }else{
                    echo "Mensaje enviado";
                 }
                
               // echo "aca...";
               
               */
?>
<!-- Google Code for Compras AXA Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1000339920;
var google_conversion_language = "es";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "G1wlCNjBsgYQ0PP_3AM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1000339920/?value=0&amp;label=G1wlCNjBsgYQ0PP_3AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>

</html>

<?php
function mes() {
	switch(date("m")) :
		case '01' : return "Enero"; break;
		case '02' : return "Febrero"; break;
		case '03' : return "Marzo"; break;
		case '04' : return "Abril"; break;
		case '05' : return "Mayo"; break;
		case '06' : return "Junio"; break;
		case '07' : return "Julio"; break;
		case '08' : return "Agosto"; break;
		case '09' : return "Septiembre"; break;
		case '10' : return "Octubre"; break;
		case '11' : return "Noviembre"; break;
		case '12' : return "Diciembre"; break;
	endswitch;
}
?>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);

session_start();
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
require 'php/functions/class.phpmailer.php';
require 'fpdf/fpdf.php';

class PDF extends FPDF {	
	// Pie de página
	function Footer() {
		// Posiciï¿½n: a 1,5 cm del final
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','I',7);
		// Nï¿½mero de pï¿½gina
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}

	function ChapterBody($file) {
		// Leemos el fichero
		$txt = file_get_contents($file);
		// Times 12
		$this->SetFont('Times','',7);
		// Imprimimos el texto justificado
		$this->MultiCell(0,3,$txt);
		// Salto de lï¿½nea
		$this->Ln();
		// Cita en itï¿½lica
		$this->SetFont('','I');
		$this->Cell(0,5,'(fin del extracto)');
	}
	
	function PrintChapter($num, $title, $file) {
		$this->AddPage();
		$this->ChapterBody($file);
	}
}

//require_once 'php/class/Correo.class.php';
$ventaDAO = new ventaDAO;
$venta = new venta;
$pasajeroDAO = new pasajeroDAO;
$planDAO = new PlanDAO;
$paisDAO = new paisDAO;
//$array = $_GET["campo"];
//echo 'aca..'.$_POST['campo'];
$array = isset($_REQUEST['campo']) ? explode(",", $_REQUEST['campo']) : NULL ;
$tipo = isset($_REQUEST['tipo']) ? $_REQUEST['tipo'] : "cliente" ;
$id=0;
if (!empty($_GET['campo'])){
	foreach($array as $id){
		$id_venta=$id;
		$venta2 = $ventaDAO->Venta2($id_venta);
		//echo $id_venta.'<br>';
		//echo "<pre>";print_r($venta2);echo "<pre>";//break;
		$usuario_id=$venta2[0]["idtbl_pasajeros"];
		$ref_venta=$venta2[0]["reftbl_ventas"];
		$valor=$venta2[0]["valortbl_ventas"];
		//$moneda=$_REQUEST['moneda'];
		//$estado_pol=$_REQUEST['estado_pol'];
		$estado_pol=$id_venta.$usuario_id;
		//$firma_cadena= "$llave~$usuario_id~$ref_venta~$valor~$moneda~$estado_pol";$firmacreada = md5($firma_cadena);//firma que generaron ustedes
		//$firma =$_REQUEST['firma'];//firma que envï¿½a nuestro sistema
		// $ref_venta=$_REQUEST['ref_venta'];	
		// $ref_final ='xxxx_111_11_11';
		//$ref_venta='AXA_4_84_6';
		$ref_pol=date('Ymd').$id_venta;
		$estadoTx = "Transacci&oacute;n aprobada";
		$venta->setPagoonlinetbl_ventas('SI');
		$venta->setReftbl_ventas($ref_venta);
		//echo "<pre>";print_r($venta);echo "<pre>";
		$refpol_venta = explode('_',$ref_venta);
		$ref_final = $venta2[0]["refTransacciontbl_ventas"];
		//$ref_final = $ref_pol.$refpol_venta[1].$refpol_venta[2].$refpol_venta[3];	
		//$venta->setRefTransacciontbl_ventas($ref_final);
		//        echo $id_venta.'--'.$ref_final.'<BR>';
		/*if($tipo == "cliente") */
		$update = $ventaDAO->updatePago($venta);
		//else $update = 1;
		// print_r($venta);
		if ($update)
		{
			//$listaArchivo = $ventaDAO->getbyReftrans($ref_final);
			$listaArchivo = $ventaDAO->getbyReftrans2($ref_venta);
			$listaPasajeros = $pasajeroDAO->gets(0,2000);
			$nombrecsv = $ref_final.date('Ymd') .".csv";
			$csvName =  'csv/'.$nombrecsv;
			$csv[] = $csvName; 
			$fileHandle = fopen($csvName, 'w') or die('Can\'t create .csv file, try again later.');
			$k = 0;
			foreach ($listaArchivo as $datos) {
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
				if ($idplan == 1 || $idplan == 10) {
					$fecha_salidapdf = 'Fecha inicio plan: '.$datos->getFechasalidatbl_ventas();
					$fecha_regresopdf = 'Fecha fin plan: '.$datos->getFecharegresotbl_ventas();
				}
				else {
					$fecha_salidapdf = 'Fecha de salida: '.$datos->getFechasalidatbl_ventas();
					$fecha_regresopdf = 'Fecha de regreso: '.$datos->getFecharegresotbl_ventas();
				}
				if ($idplan==1) $imgcobertura = 'America.jpg';
				if ($idplan==2) $imgcobertura = 'Plan_Multiviajes_30_Dias.jpg';
				if ($idplan==3) $imgcobertura = 'Larga_Estadia.jpg';
				if ($idplan==4) $imgcobertura = 'Clasico.jpg';
				if ($idplan==5) $imgcobertura = 'Turista_Economico.jpg';
				if ($idplan==6) $imgcobertura = 'Turista_Mundial.jpg';
				if ($idplan==7) $imgcobertura = 'Europa_y_Resto_del_Mundo.jpg';
				if ($idplan==8) $imgcobertura = 'Golden.jpg';
				if ($idplan==9) $imgcobertura = 'Estudiantil.jpg';
				if ($idplan==10) $imgcobertura = 'Plan_Multiviajes_60_Dias.jpg';
				if ($idplan==12) $imgcobertura = 'schengen.png';
	
				$diasviaje = $datos->getDiasviajetbl_ventas();
				$canal = $datos->getCanalventatbl_ventas();
				$fechaventa = $datos->getFechaventatbl_ventas();
				$valor = $datos->getValortbl_ventas();
				$observaciones = $datos->getObservacionestbl_ventas();
				$terminos = $datos->getTerminostbl_ventas();
				$redencion = $datos->getRedencion();
				if($tipo == "csv") :
					$elCSV = utf8_decode($nombres).",".$identificacion.",".$email.",".$nacimiento.",".$edad.",".($nombreplan).",".($nombrepais).",".$fecha_salida.",".$fecha_regreso.",".$diasviaje.",".($canal).",".$fechaventa.",".$valor.",".($observaciones).",".$terminos.",".$ref_final.",".$redencion.",".$listaPasajeros." \n ";
					fwrite($fileHandle, $elCSV); /*echo "<br>escrito el archivo: ".$csvName;*/
				elseif($tipo == "cliente") :
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
				endif;
				$k++;
			}
			fclose($fileHandle);
				# envio de .csv a AXA
				// Definimos el nombre de archivo a descargar.
				
				/*$from = "AXA ASISTENCIA COLOMBIA S.A <planes@tarjetasdeasistencia-axa.com>";
				$to = "bdclientes@axa-assistance.com.co, marketing@axa-assistance.com.co";
				$bcc = array("marisol.arenas@axa-assistance.com.co", "marisolarenasb@gmail.com", "planes@tarjetasdeasistencia-axa.com");
				$subject = "45086\r\n\r\n";
				$body = "45086";
				$html = '<html><body>45086</body></html>';
				
				$host = "mail.tarjetasdeasistencia-axa.com";
				$username = "planes@tarjetasdeasistencia-axa.com";
				$password = "Usuario2011";
				
				$headers = array (
					'From' => $from,
					'To' => $to,
					'Bcc' => $bcc,
					'Subject' => $subject
				);
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
				}*/
				# FIN envio .csv a AXA
			if($tipo == "cliente") :
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
					$result = $mail->getMessage();
				} else {
					$result = "Se envíaron los correos a los clientes seleccionados";
				}//exit("Se proceso la venta");
				# FIN envio certificado asistencia a cliente
			endif;
		}
	}
	if($tipo == "csv") :
		$zip = new ZipArchive();
		$filename = "csv/".date("ymdhis")."-".implode("", $array).".zip";
		if($zip->open($filename,ZIPARCHIVE::CREATE)===true) {
			foreach($csv as $file) :
				$zip->addFile($file);
			endforeach;
			$zip->close();
			//echo 'Creado '.$filename;
			// Ahora guardamos otra variable con la ruta del archivo
			$file = realpath($filename);
			$result="Se genero el archivo csv";
			// Aquí, establecemos la cabecera del documento
			header("Content-Description: Descargar archivo");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/force-download");
			header("Content-Length: " . filesize($file));
			header("Content-Transfer-Encoding: binary");
			readfile($file);
			exit();
		}
		else {
			echo 'Error creando '.$filename;
		}
	endif;
}else{
	echo $result="No se selecciono ninguna venta";
}
//$result='Se registro exitosamente';
$data = array('success'=> true, 'message'=> $result,'id'=>$id);
//print_r($data);
echo json_encode($data);
/*header("Content-Description: Descargar archivo");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/force-download");
header("Content-Length: " . filesize($file));
header("Content-Transfer-Encoding: binary");
readfile($file);*/

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

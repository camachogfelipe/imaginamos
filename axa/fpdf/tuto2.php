<?php
require('fpdf.php');

class PDF extends FPDF
{


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

// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->Image('http://nuevascaras.com/axa_desarrollo/images/pdf/Gastos_medicos.png',75,60,50,40);
$pdf->Image('http://tarjetasdeasistencia-axa.com/images/pdf/Gastos_medicos.png',75,60,50,40);
$pdf->Image('http://tarjetasdeasistencia-axa.com/images/pdf/Telefono.png',40,144,120,22);
$pdf->Image('http://tarjetasdeasistencia-axa.com/images/pdf/Firma.png',10,255,60,18);
// Logo
$pdf->Image('http://tarjetasdeasistencia-axa.com/images/layout/logo.png',10,5,50,15);
// Arial bold 15
$pdf->SetFont('Arial','B',15);
// Movernos a la derecha
$pdf->Cell(80);
// T�tulo
$pdf->Cell(30,40,'AXA ASISTENCIA COLOMBIA CERTIFICA',0,0,'C');
// Salto de l�nea
$pdf->Ln(30);
$pdf->SetFont('Times','',10);

$pdf->MultiCell(0,5,'Que MIGUEL SEQUERA DUARTE con identificaci�n No. 79346275 cuenta con el servicio de asistencia m�dica en el exterior por adquirir la tarjeta de asistencia respaldada por Inter Partner Assistance, con el plan Europa y Resto del Mundo radicado bajo el n�mero BG13AEA0030 y con las siguientes condiciones:',0,'J');
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

$txt = 'Las condiciones generales, l�mites de cobertura, excepciones y restricciones de los servicios de asistencia est�n a su ';
$txt .= 'coberturas ser�n aplicables durante el viaje que realice dicho Beneficiario dentro del Per�odo-Vigencia y dem�s condiciones ';
$txt .= 'establecidas para cada plan. El Beneficiario declara que al momento de la compra ha elegido el tipo de tarjeta y ha';
$txt .= 'aceptado los t�rminos, condiciones y exclusiones para cada servicio de asistencia. Los servicios de asistencia ser�n';
$txt .= 'prestados de acuerdo con las definiciones y consideraciones particulares y en situaci�n de emergencia descritos para cada';
$txt .= 'prestados de acuerdo con las definiciones y consideraciones particulares y en situaci�n de emergencia descritos para cada';
$txt .= 'plan, por lo tanto no se configura como seguro m�dico, ni tiene como objeto la previsi�n o cuidado de salud.';
$txt .= 'Frente a una situaci�n de emergencia, comunicarse de inmediato con la central de alarma de Inter Partner m�s';
$txt .= 'cercana, las 24 horas del d�a.';
$pdf->MultiCell(0,5,$txt,0,'J');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);

$pdf->SetFont('Times','',8);
$pdf->Cell(0,5,'* Los n�meros telef�nicos est�n sujetos a los cambios de codificaci�n en cada pa�s.',0,1); 
$pdf->SetFont('Times','',10);
$pdf->MultiCell(0,5,'2. Enviar a la central de alarma en Colombia fotocopia completa del pasaporte, donde figuren las fechas de salida y dem�s documentos que se soliciten.',0,'J');
$pdf->Cell(0,5,'3. La asistencia se prestar�n en el tiempo y de acuerdo con el plan adquirido.',0,1);
$pdf->MultiCell(0,5,'4. El valor de la cobertura corresponde al monto equivalente de la moneda legal vigente de cada pa�s donde se preste el servicio de asistencia.',0,'J');
$pdf->MultiCell(0,5,'Este certificado se expide en Colombia el d�a 16 de Junio de 2012 a solicitud del interesado y de acuerdo con el decreto 2150 de 5 de diciembre de 1995 no requiere autenticaci�n para su validez.',0,'J');
$pdf->MultiCell(0,5,'Con el recibo de la tarjeta de asistencia el beneficiario declara haber recibido, conocido y aceptado las condiciones del contrato de asistencia.',0,'J');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->SetFont('Times','',7);
$pdf->Cell(0,5,'Venta por cuenta de Inter Partner Assistance (IPA) - Servicios en el exterior.',0,1);
//fin pagina 
/*$pdf->SetFont('Times','',7);     
$pdf->SetTextColor(255,'','');
$pdf->Cell(0,3,'Le solicitamos consultar antes de realizar su compra en la p�gina WEB www.axa-assistance.com.co las condiciones generales, l�mites de cobertura excepciones y restricciones de, ',0,1);
$pdf->Cell(0,3,'asistencia detallados en la p�gina. A continuaci�n encontrar� solo algunas condiciones:  Las coberturas ser�n prestadas por INTER PARTNER ASSISTANCE para la persona que',0,1);
$pdf->Cell(0,3,'adquiera una TARJETA DE ASISTENCIA a trav�s de una Agencia de viaje Administrada;  directamente a trav�s de las oficinas; agencia de AXA Asistencia � a trav�s del sitio',0,1);
$pdf->Cell(0,3,'WEB www.axa-assistance.com.co, las coberturas ser�n aplicables durante el viaje que realice dicho Beneficiario dentro del Periodo � Vigencia y dem�s condiciones establecidas.',0,1);
$pdf->Cell(0,3,'El Beneficiario; declara haber  elegido el tipo de tarjeta y ha aceptado los t�rminos, condiciones  y exclusiones para cada plan y servicio de asistencia.',0,1);*/
 
 
$pdf->PrintChapter(1,'','asistencia.txt');

$pdf->Output();

?>

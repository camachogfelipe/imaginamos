<?php
require_once'pdfs/html2pdf.class.php';

$html2pdf = new HTML2PDF('P', 'A3', 'fr');
$html2pdf->WriteHTML($_POST["pdf"]);
$html2pdf->Output('imagenes/pdfs/PDFUSER' . $_POST["user"] . '.pdf', 'F');

?>
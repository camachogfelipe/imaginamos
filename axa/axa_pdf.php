<?php
class PDF extends FPDF {
	
	function Footer() {
		// Posición: a 1,5 cm del final
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','I',7);
		// Número de página
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
	
	function ChapterBody($file) {
		// Leemos el fichero
		$txt = file_get_contents($file);
		// Times 12
		$this->SetFont('Times','',7);
		// Imprimimos el texto justificado
		$this->MultiCell(0,3,$txt);
		// Salto de línea
		$this->Ln();
		// Cita en itálica
		$this->SetFont('','I');
		$this->Cell(0,5,'(fin del extracto)');
	}
	
	function PrintChapter($num, $title, $file) {
		$this->AddPage();
		$this->ChapterBody($file);
	}
}
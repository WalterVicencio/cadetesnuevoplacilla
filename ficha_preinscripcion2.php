<?php
require('./fpdf/fpdf.php');

setlocale(LC_ALL,"es_CL.UTF-8");
$fecha_inscripcion=date("d/m/Y");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetXY(10,10);
$pdf->Cell(0,10,utf8_decode('Cadetes'));
$pdf->SetXY(10,17);
$pdf->Cell(0,10,utf8_decode('Nuevo Placilla'));
$pdf->SetXY(75,10);
$pdf->Cell(0,10,utf8_decode('Ficha de Inscripción'));
$pdf->SetXY(170,10);
$pdf->Cell(0,10,utf8_decode('FOTO'));
$pdf->SetXY(90,20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,$fecha_inscripcion);
$pdf->Ln();
$pdf->SetXY(0,40);
$pdf->Cell(250,0,'','T');
$pdf->SetXY(10,50);
$pdf->Cell(30,10,utf8_decode('Nombre:'));
$pdf->SetXY(30,50);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('asd'));
$pdf->Output();
?>
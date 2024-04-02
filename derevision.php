<?php
require('./fpdf/fpdf.php');



SetXY(75,10);
Cell(60,10,'ESTADO DE GRUA',0,0,'C');

class PDF extends FPDF
{
//Cabecera de página
   function Header()
   {
    $empresa="EMPRESA";
    setlocale(LC_ALL,"es_CL.UTF-8");
    $fechainforme=date("d/m/Y");
    //Logo
    //$this->Image("LOGOCT.jpg" , 10 ,8, 40);
    //Arial bold 15
    $this->SetFont('Arial','B',12);
    //Movernos a la derecha
    $this->Cell(80);
    //Título
    $this->SetXY(75,10);
    $this->Cell(60,10,'ESTADO DE GRUA',0,0,'C');
    $this->Ln();
    $this->SetXY(75,17);
    $this->SetFont('Times');
    $this->Cell(60,10,$empresa,0,0,'C');
    $this->Ln();
    $this->SetXY(75,24);
    $this->SetFont('Times');
    $this->Cell(60,10,$fechainforme,0,0,'C');
    //Salto de línea
    $this->Ln();
    $this->SetXY(20,30);
    $this->SetFont('Times');
    $this->Cell(40,10,'Analista: Walter Vicencio',0,0,'C');
    $this->Ln();
    $this->SetXY(12,40);
    $this->Cell(186,0,'','T');
      
   }
   
   //Pie de página
   function Footer()
   {
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
   }
   
   //Tabla coloreada
function Tabla($datos)
{
//Colores, ancho de línea y fuente en negrita
$this->SetFillColor(179,213,245);
$this->SetTextColor(0,0,0);
$this->SetDrawColor(0,0,0);
$this->SetLineWidth(.3);
$this->SetFont('','B');
//Cabecera

$this->SetXY($x+87, $y+17);
$nameano=utf8_decode('AÑO GRÚA');
$this->Cell(87,7,$nameano,1,0,'C',1);
$this->SetXY($x+87, $y+24);

$this->SetXY($x, $y+31);
$this->Cell(174,7,'OBSERVACIONES',1,0,'C',1);
$this->SetXY($x, $y+38);
//$this->Ln();
//$this->Cell(5,7,'',0,0,'C',0);


}
}


$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Output('Ficha','I');

?>
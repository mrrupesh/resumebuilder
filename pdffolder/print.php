<?php
//grab the input data
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
//printing data
$pdf->SetFont('Arial','B',20);
$pdf->Cell('0','5',$name,'','1');
$pdf->Cell('0','5',$email,'','1');
$pdf->Cell('0','5',$username,'','1');

$pdf->Output();
?>

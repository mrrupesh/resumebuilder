<?php
//grab the input data

$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$city=$_POST['taskoption'];
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
//printing data
$pdf->SetFont('Arial','B',20);
$pdf->Cell('0','5',$fname ." ".$lname,'','1','C');
$pdf->Cell('0','8','','','1');
$pdf->Cell('0','5',$email,'','1','C');
$pdf->Cell('0','8','','','1');
$pdf->Cell('0','5',$phone,'','1','C');
$pdf->Cell('0','8','','','1');
$pdf->Cell('0','5',$city,'','1','C');
$pdf->Output();
?>

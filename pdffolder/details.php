<?php
session_start();
if(isset($_SESSION['loggedin']))
{
	$email=$_SESSION['loggedin'];
$con=mysqli_connect('localhost','root','','resume');
$emailid=$_SESSION['loggedin'];
$r=mysqli_query($con,"select * from profile where email='$emailid'");
$row=mysqli_fetch_assoc($r);
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$phone=$row['phone'];

$s=mysqli_query($con,"select * from education where email='$emailid'");
$row1=mysqli_fetch_assoc($s);
$degree=$row1['degree'];
$collage=$row1['collage'];
$field=$row1['field'];


$p=mysqli_query($con,"select * from job where email='$emailid'");
$row2=mysqli_fetch_assoc($p);
$title=$row2['title'];
$type=$row2['type'];
require('fpdf.php');



$pdf = new FPDF();
$pdf->AddPage();
//printing data
$pdf->SetFont('Arial','B',20);
$pdf->Cell('20','8','');
$pdf->Cell('0','8',$fname.$lname,'','1');
$pdf->SetFont('Arial','B',15);
$pdf->Cell('20','8','');
$pdf->Cell('0','8',$email,'','1');
$pdf->Cell('20','8','');
$pdf->Cell('0','8',$phone,'','1');
$pdf->Cell('0','30','','','1');
$pdf->Cell('20','8','');
$pdf->Cell('0','8','Job Preference','','1');
$pdf->Cell('20','8','');
$pdf->Cell('130','0','','1','1');
$pdf->Cell('20','8','');
$pdf->Cell('0','8',$title.' '.$type,'','1');
$pdf->Cell('0','20','','','1');
$pdf->Cell('20','8','');
$pdf->Cell('0','8','Education','','1');
$pdf->Cell('20','8','');
$pdf->Cell('130','0','','1','1');
$pdf->Cell('20','8','');
$pdf->Cell('0','8',$degree." "."in"." ".$field,'','1');
$pdf->Cell('20','8','');
$pdf->Cell('20','8',$collage);
$pdf->Output();
}
?>



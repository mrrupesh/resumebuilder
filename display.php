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



?>
<!DOCTYPE html>
<html lang="en">
  <head>
<style>
#header
{color:	#ffbf00;font-weight:bold;font-family:fixedays;padding-left:60px;}
#label
{font-family:fixedays;font-weight:bold;font-size:20px;}
#data
{font-family:Aerial;font-weight:bold;font-size:20px;}
#datatype
{font-family:Impact;color:red;padding-left:10px;}

</style>  
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body style="background-image:url(blue.png);background-size:cover;">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
	<h1 id="header">YOUR DETAILS</h1>
	
	</div>
	<div class="col-md-4">
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6"style="background-color:black;color:white;height:700px">
	
	<div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-5">
	<h3 id="datatype">Profile</h3><br>
	<p id="label">Name</p><br>
    <p id="label">Email</p><br>
    <p id="label">Phone</p>
	<h3 id="datatype">Education</h3><br>
	<p id="label">Your Degree</p><br>
	<p id="label">Collage</p><br>
	<p id="label">Degree in which Field</p>
	<h3 id="datatype">Job prefferences</h3><br>
	<p id="label">Job Name</p><br>
	<p id="label">Job type</p><br>
	<a href="pdffolder/details.php">generate pdf</a>
	</div>
	<div class="col-md-5">
	<h3 id="datatype"></h3><br><br><br>
	<p id="data">	<?php echo $fname." ".$lname;?></p><br>
	<p id="data">	<?php echo $email;?></p><br>
	<p id="data">	<?php echo $phone;?></p><br><br><br>
	<p id="data">	<?php echo $degree;?></p><br>
	<p id="data">	<?php echo $collage;?></p><br>
	<p id="data">	<?php echo $field;?></p><br><br><br>
	<p id="data">	<?php echo $title;?></p><br>
      <p id="data">	<?php echo $type;?></p>
	
	
	
	
	
	</div>
	<div class="col-md-1">
	</div>
	<div class="col-md-3">
	</div>
	</div>
	</div>
	
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
	</html>
	<?php

}
else
	
	{
		echo "error occured";
	}
	?>

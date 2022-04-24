<!DOCTYPE html>
<html lang="en">
  <head>
<style>
#header
{color:orange;font-family:Impact;font-weight:bold;text-align:center
#upload
{text-align:center}
#label
{padding-left:8px;font-weight:bold;font-family:fixedays;font-size:16px}
#input
{border-radius:3px;}
#datatype
{font-family:Georgia;font-weight:bold;font-size:20px;}

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
	<h1 id="header">Create an Indeed Resume</h1>
	<p id="upload">or <span style="color:blue;font-family:Impact;font-weight:bold"><a href="">upload an resume</a></span></p>
	</div>
	<div class="col-md-4">
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6"style="background-color:white;height:330px">
	<form method="post">
	<h3 id="datatype">Education</h3>
	<label id="label">Degree</label>
	<input type="text"name="degree"required autocomplete="off"class="form-control mb-2"><br>
	<label id="label">Collage</label>
	<input type="text"name="collage"required autocomplete="off"id="input"class="form-control"><br>
	<label id="label">Field of study</label>
	<input type="text"name="field"required autocomplete="off"class="form-control mb-2"><br>
	<button class="btn btn-danger btn-block"name="next2">Next</button>
	       </form>
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
	session_start();
    if(isset($_SESSION['loggedin']))
	{
		$email=$_SESSION['loggedin'];
    $con=mysqli_connect('localhost','root','','resume');
	if(isset($_POST['next2']))
	{
	$degree=$_POST['degree'];
	$collage=$_POST['collage'];
	$field=$_POST['field'];
    $emailid=$_SESSION['loggedin'];
	
	$q=mysqli_query($con,"insert into education(email,degree,collage,field) VALUES ('$emailid','$degree','$collage','$field')");
		if(mysqli_affected_rows($con)>0)
	    {
	     header('Location:job.php');
		}
		else
		{
			echo "sorry";
		}
	}
	}
	?>
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
.para
{font-family:Sitka Heading;padding-left:6px;color:red}



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
	<div class="col-md-6"style="background-color:white;height:700px">
	<form method="post">
	<h3 id="datatype">Profile</h3>
	<label id="label">First Name</label>
	<input type="text"name="fname"required autocomplete="off"class="form-control mb-2"><br>
	<label id="label">Last Name</label>
	<input type="text"name="lname"required autocomplete="off"id="input"class="form-control"><br>
	<label id="label1">Select city</label>
	    <select name="taskoption">
  <option value="patna">patna</option>
  <option value="jahanabad">jahanabad</option>
  <option value="muzzaffarpur">muzzaffarpur</option>
  <option value="ranchi">ranchi</option>
        </select><br>
		<h3 id="datatype">Contact Information</h3>
	<label id="label">Email</label>
	<input type="email"name="email"required autocomplete="off"id="input"class="form-control"><br>
	<label id="label">Phone</label>
	<input type="phone"name="phone"required autocomplete="off"id="input"class="form-control">
	<h3 id="datatype">Resume Privacy Settings</h3>
	<input type="radio"name="privacy"value="privacy">Public<br>
	<p class="para"style="font-family:Sitka Heading;padding-left:10px;color:red">Your resume will be visible to anyone but your phone number and 
	email are provided only to the employers<br> you apply or get in touch with.</p>
	<input type="radio"name="privacy"value="privacy">Private<br>
	<p class="para"style="font-family:Sitka Heading;padding-left:10px;color:red">Your resume is not visible.Employers cannnot find your resume but
	you can attach it when you apply for any job of your choice.</p>
	
	
	
	
	
	<button class="btn btn-danger btn-block"name="next1">Next</button>
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

    $con=mysqli_connect('localhost','root','','resume');
	if(isset($_POST['next1']))
	{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$city=$_POST['taskoption'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
	$q=mysqli_query($con,"insert into profile(fname,lname,city,email,phone) VALUES ('$fname','$lname','$city','$email','$phone')");
		if(mysqli_affected_rows($con)>0)
	    {
			$_SESSION['loggedin']=$email;
	     header('Location:education.php');
		}
		else
		{
			echo "sorry";
		}
	}
	?>
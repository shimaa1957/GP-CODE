<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$Gender=$_POST['gender'];
	$num=$_POST['number'];
	$address=$_POST['add'];
	$gmail=$_POST['mail'];
	$password=$_POST['pass'];
	
	if(!empty($gmail)&&!empty($password)&&!is_numeric($gmail))
	{
		
 $query="insert into form(fname,lname,gender,cnum,address,email,pass)values('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";

  mysqli_query($con, $query);

 echo "Successfully Register!";
}
else
{
echo "Please Enter some Valid Information";
}



}


?>


 










<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title> form Login and Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="signup">
<h1> Sign Up</h1>
<h4> It's free and only takes a minute</h4>
<form method="POST">
<label> First Name</label>
<input type="text" name="fname" required>
<label> Last Name</label>
<input type="text" name="lname" required>
<label> Gender</label><br>
<input type="text" name="gender" required>
<label> Contact Address</label>
<input type="tel" name="number" required>
<label> Address</label><br>
<input type="text" name="add" required>
<label> Email</label>
<input type="email" name="mail" required>
<label> Password</label><br>
<input type="password" name="pass" required>
<input type="submit" name="" value="Submit"></form>
<p> By clicking the Sign Up button, you agree to our<br>  
<a href=""> Terms and Condition  </a> and <a href="#"> Policy Privacy </p>
<!--<p> Already have an account? <a href="login.php"> Login Here</a></p>-->
</div>
</body>
</html>







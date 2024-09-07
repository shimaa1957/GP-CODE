<?php
session_start();

include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
$Email=$_POST['Email'];
$Password=$_POST['Password'];
if(!empty($Email)&&!empty($Password)&&!is_numeric($Email))
{
$query="select*from form where email='$Email' limit 1";
$result=mysqli_query(&con,$query);
if($result)
{
if ($result && mysqli_num_rows($result)>0)
{
	$user_data=mysqli_fetch_assoc($result);
	if ($user_data['Password']==$Password)
	{
		header("locaction:index.php");
		die;
}
}
}
echo "wrong username or password";	
}
else{
	echo "wrong username or password";
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
<div class="login">
<h1> Login</h1>
<form method="POST">
<label> Email</label>
<input type="email" name="mail" required>
<label> Password</label><br>
<input type="password" name="pass" required>
<input type="submit" name="" value="Submit">
</form>
<p> Not have an account?<a href="signup.php"> Sign Up here</a></p>
</body>
</html>
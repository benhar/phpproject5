<?php
//include('db.php'); // Includes Login Script
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username'])  && empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("e_shope", $con);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from admin where password='$password' AND username='$username'", $con);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: dashboard.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid!";
}
mysql_close($con); // Closing Connection
}
}

if(isset($_SESSION['login_user'])){
header("location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin - Login Form</title>
  <link rel='stylesheet' href='css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/loginStyle.css">

  
</head>

<body>

  <form action="" method="post" class="login">
  
  <fieldset>
    
  	<legend class="legend">Admin Login</legend>
    <div class="login-logo">
      <img src="images/adminlogo.png" alt="adminlogo">
    </div>
    <span class="condition"><?php echo $error; ?></span>
    <div class="input">
    	<input type="text" name="username" placeholder="Email or User name" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    
    <div class="input">
    	<input type="password" name="password" placeholder="Password""  required/>
      <span><i class="fa fa-lock"></i></span>
    </div>
    
    <button type="submit" name="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
  </fieldset>
  
  
</form>
  <script src='js/jquery.min.js'></script>
  <script src="js/login.js"></script>
</body>
</html>
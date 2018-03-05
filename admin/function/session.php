<?php
error_reporting(0);
// Establishing con with Server by passing server_name, user_id and password as a parameter
$con = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db('e_shope');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from admin where username='$user_check'", $con);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($con); // Closing con
header('Location: index.php'); // Redirecting To Home Page
}
?>
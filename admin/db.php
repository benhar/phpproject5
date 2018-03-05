<?php
// Create connection
$con = mysqli_connect("localhost","root","","e_shope");

// Check connection
if (mysqli_connect_error()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
	//echo 'DB connect successfully';
}



?> 
<?php



$con = mysqli_connect("localhost","ninjauser","password","ninja");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
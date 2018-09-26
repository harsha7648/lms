<?php
$con=mysqli_connect("localhost","root","","librarymanagementsystem");
// $con=mysqli_connect("192.68.0.1:3306","harsha1234","9618797368","smruthi");
// $con=mysqli_connect("43.255.154.30", "harsha1234", "asdfghjkl", "librarymanagementsystem", "3306");
// $con=mysqli_connect("localhost","harsha1234","chinna@1234","librarymanagementsystem");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>



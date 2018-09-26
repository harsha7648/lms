
<?php

	session_start();
	include('connect.php');
	if(isset($_POST['submit'])) {
	$result = mysqli_query($con,"SELECT * FROM userstable WHERE username='" . $_POST["username"] . "' and password = '". $_POST["pwd"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["username"] = $row['username'];
	header("refresh:0;url=home.php");	
	} else {
			echo "Invalid Username or Password!";
			header("refresh:2;url=index.php");	
	}
}


?>
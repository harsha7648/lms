<?php
	include('connect.php');
	session_start();
	if (isset($_POST['report'])) {
	$name=$_SESSION['username'];
	$result= mysqli_query($con,"SELECT * FROM userstable WHERE username='$name'");
	while($row=mysqli_fetch_object($result)){
	
	$contact=$row->contact;
	$nameofbook=$_POST['bookname'];
	$bookid=$_POST['bookid'];
	$authorname=$_POST['authorname'];
	$info=$_POST['info'];
	$sql=mysqli_query($con,"INSERT INTO reports(bookid,bookname,authorname,name,contact,info) VALUES('$bookid','$nameofbook','$authorname','$name','$contact','$info')");

	if ($sql==true) {

		echo "<h1>Report sent successfully</h1";
		header("refresh:2;url=report.php");
	}else{
		echo "Some thing went wrong";
	}


	}
}

?>
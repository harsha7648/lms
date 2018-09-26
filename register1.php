<?php
	session_start();
	include_once('PHPMailer/class.phpmailer.php');
	require_once('PHPMailer/class.smtp.php');
	include("connect.php");
	$mail = new PHPMailer();
	$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);
	
		if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$user=mysqli_query($con,"SELECT * FROM userstable WHERE username='$username'");

		if (mysqli_num_rows($user)>=1) {
			echo "Username already exists.Please find the unique username";
			header('refresh:2;url=index.php');
		}else{

		$pass=$_POST['pwd'];
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$streetaddress=$_POST['streetaddress'];
		$landmark=$_POST['landmark'];
		$postalcode=$_POST['postalcode'];
		$email=$_POST['mailid'];
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (!preg_match($regex, $email)) {
		 echo $email . " is an invalid email. Please try again.";
		 header('refresh:1;url=index.php');
		
		} else { 
		 echo $email . " is a valid email. We can accept it.";

		
  	
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "profileimages/".basename($image);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
			
			$mail->isSMTP();
			$mail->CharSet = 'UTF-8';
			$mail->Host       = "smtp.gmail.com"; // SMTP server 
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
			$mail->Username   = "hreddy710@gmail.com"; // SMTP account username 
			$mail->Password   = "9618797368";        // SMTP account password 

			$mail->From = 'hreddy710@gmail.com';
			$mail->FromName = 'Reddy';

			$mail->AddAddress($email, 'Information'); 
			$mail->AddReplyTo('hreddy710@gmail.com', 'Megasoft');

			$mail->IsHTML(true);

			$mail->Subject = 'Confirmation Mail- Megasoft';
			 $mail->AddCustomHeader( "Return-receipt-to: hreddy710@gmail.com" );
			  $mail->AddCustomHeader( "Disposition-Notification-To:<hreddy710@gmail.com>");
			$mail->Body    =  'You have successfully registered.Please login using your correct credentials';
			$mail->AltBody = 'You have successfully registered.Please login using your correct credentials';

			
		
		$sql=mysqli_query($con,"INSERT INTO userstable(username,password,email,name,contact,streetaddress,landmark,postalcode,image) VALUES('$name','$pass','$email','$name','$contact','$streetaddress','$landmark','$postalcode','$image')");
		if($sql==true){
			if(!$mail->Send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
			exit;
			}
			echo 'Message has been sent to &nbsp;&nbsp;';
			echo $name;
			echo "Data has been inserted sucesfully";
		
			header("refresh:3;url=index.php");
		}else{
			echo "data has not been inserted";
		}
		mysqli_close($con);
		}
}
}
	  ?>			






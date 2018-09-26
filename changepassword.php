<?php  
include('connect.php');

if (isset($_POST['update'])) {
	session_start();
include_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');
	$name=$_SESSION['username'];
	$oldpassword=$_POST['oldpwd'];
	$newpassword=$_POST['newpwd'];

	$sql= mysqli_query($con,"SELECT * FROM userstable WHERE username='$name'");

	while($result=mysqli_fetch_object($sql))
		{
				$presentpassword = $result->password;

				if ($oldpassword==$presentpassword) 
					
				{
					
					$sql1=mysqli_query($con,"UPDATE userstable
											SET password='$newpassword'
											WHERE username='$name' ");	   
				if ($sql1==true) {
									echo "<h1> Password updated succesfully</h1>";
									header("refresh:2;url=profile.php");
								}else{
									echo "Some error have occured while updating";
									}
						$result=mysqli_query($con,"SELECT * FROM userstable WHERE username='$name'");
		while ($row=mysqli_fetch_object($result)) {
		 
		    $email=$row->email;
		    $mail = new PHPMailer();
		      $mail->SMTPOptions = array(
		          'ssl' => array(
		              'verify_peer' => false,
		              'verify_peer_name' => false,
		              'allow_self_signed' => true
		          )
		      );
		      
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

		      $mail->Subject = 'Password Change- Megasoft';
		       $mail->AddCustomHeader( "Return-receipt-to: hreddy710@gmail.com" );
		        $mail->AddCustomHeader( "Disposition-Notification-To:<hreddy710@gmail.com>");
		      $mail->Body    =  '<h1>The password has been changed successfully.</h1>';
		      $mail->AltBody = '<h1>The password has been changed successfully.</h1>';

		      if(!$mail->Send()) {
		      echo 'Message could not be sent.';
		      echo 'Mailer Error: ' . $mail->ErrorInfo;
		      exit;
		      }
								

						}
					}}}

				else{
					echo "The Old password is not correct";
					header("refresh:2;url=profile.php");
				}
		



?>
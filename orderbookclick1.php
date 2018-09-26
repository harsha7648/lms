
<?php
session_start();
include 'connect.php'; 
include_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');
if (isset($_POST['submit'])) {
  $name=$_SESSION['username'];
  $bookname=$_POST['bookname'];
  $bookid=$_POST['book_id'];
  $authorname=$_POST['authorname'];
  echo $name;
  echo $bookname;
  echo $bookid;
$result= mysqli_query($con,"SELECT * FROM userstable WHERE username='$name'");
echo "<br><br><br><br>";
while($row=mysqli_fetch_assoc($result)){
  $name=$row['username'];
  $contact=$row['contact'];
  $streetaddress=$row['streetaddress'];
  $landmark=$row['landmark']; 
  $postalcode=$row['postalcode'];
 
}

  $sql= mysqli_query($con,"INSERT INTO orderedbooks (bookname,bookid,authorname,mainname,contact,streetaddress,landmark,postalcode) VALUES('$bookname','$bookid','$authorname','$name','$contact','$streetaddress','$landmark','$postalcode') ");
  
$result=mysqli_query($con,"SELECT * FROM userstable WHERE contact='$contact'");
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

      $mail->Subject = 'Confirmation Mail- Megasoft';
       $mail->AddCustomHeader( "Return-receipt-to: hreddy710@gmail.com" );
        $mail->AddCustomHeader( "Disposition-Notification-To:<hreddy710@gmail.com>");
      $mail->Body    =  '<h1>The order has been placed successfully.Please wait for the administrator Confirmation</h1>';
      $mail->AltBody = '<h1>The order has been placed successfully.Please wait for the administrator Confirmation</h1>';

      if(!$mail->Send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
      exit;
      }

  echo "<script type='text/javascript'>window.location.href = 'ordersuccess.php';</script>";
}        
}    

 ?>
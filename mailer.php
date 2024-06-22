<!DOCTYPE html>
<html>
<head>
    
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\composer\vendor\autoload.php';
/*
if(isset($_POST['s']))
{ 
  $user_name = $_POST['name'];
  $user_email = $_POST['email'];
}
*/
$email = new PHPMailer(TRUE);

$user_email = 'abhishekkshirsagar1920@gmail.com';
$user_name = 'Abhishek kshirsagar';

$mail = new PHPMailer;
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'onlinecrimereportingsystem2022@gmail.com'; // your email id
$mail->Password = 'izwglatkhuvywxrz'; // your password
$mail->SMTPSecure = 'tls';                  
$mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
$mail->setFrom('onlinecrimereportingsystem2022@gmail.com', 'Online Crime Reporting System');
$mail->addAddress($user_email);   // Add a recipient
$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Dear User,</h1>';
$bodyContent .= '<p>Your Complaint has been registered successfully...<br> Your Complaint Registrationn ID is: 123456</p>';
$mail->Subject = 'Online Crime Reporting System - Your Complaint Registration ID';
$mail->Body    = $bodyContent;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}

?>
</table>
 </div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
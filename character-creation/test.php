<?php
require("class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";

$mail->From = "danelerhostcrexcum@gmail.com";
$mail->AddAddress("danelerhostcrexcum@gmail.com");

$mail->IsHTML(true);

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
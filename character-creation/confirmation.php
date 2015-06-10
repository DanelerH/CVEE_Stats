<?php
if(isset($_POST['submit'])) 
{

$name= .$_POST['name'];
$cName= .$_POST['cName'];
$gender= .$_POST['sex'];
$race= .$_POST['race'];
$variant= .$_POST['variant'];
$class= .$_POST['class'];
$abilities = implode(', ', $_POST['abilities']);
$secondaries = implode(', ', $_POST['secondaries']);

require 'phpmailer/class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';

$mail->Username = "danelerhostcrexcum@gmail.com";
$mail->Password = "Daneler4";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "danelerhostcrexcum@gmail.com";
$mail->FromName = "Alex Mecum";

$mail->addAddress"danelerhostcrexcum@gmail";

$mail->addBCC'email';  // optional for if user wants a copy

$mail->Subject = "New Character";
$mail->Body = '<html><body>
							<table>
							<tr><td><strong>Name:</strong> </td><td>' .$name. '</td></tr>
							<tr><td><strong>Character name:</strong> </td><td>' .$cName. '</td></tr>
							<tr><td><strong>Gender:</strong> </td><td>' .$gender. '</td></tr>
							<tr><td><strong>Race:</strong> </td><td>' .$race. '</td></tr>
							<tr><td><strong>Variant:</strong> </td><td>' .$variant. '</td></tr>
							<tr><td><strong>Class:</strong> </td><td>' .$class. '</td></tr>
							<tr><td><strong>Abilities:</strong> </td><td>' .$abilities. '</td></tr>
							<tr><td><strong></strong> </td><td>' .$secondaries. '</td></tr>
							</table>
							</body></html>';

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";
}
?>
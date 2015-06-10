<?php

require("class.phpmailer.php");

$name = $_POST['name'] ;
$cName = $_POST['cName'] ;
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male


$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Encoding = '7bit';

$mail->Username = "danelerhoscrexcum@gmail";
$mail->Password = "Daneler4";

$mail->From     = "danelerhostcrexcum@gmail.com";
$mail->AddAddress("danelerhoscrexcum@gmail.com");

$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;

if(!$mail->Send()) {
	echo 'Message was not sent.';
	echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent.';
}
?>
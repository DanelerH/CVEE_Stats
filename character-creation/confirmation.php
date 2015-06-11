<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

$name= .$_POST['name'];
$cName= .$_POST['cName'];
$gender= .$_POST['sex'];
$race= .$_POST['race'];
$variant= .$_POST['variant'];
$class= .$_POST['class'];
$abilities = implode(', ', $_POST['abilities']);
$secondaries = implode(', ', $_POST['secondaries']);

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';
require 'phpmailer/class.phpmailer.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "danelerhostcrexcum@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Daneler4";

//Set who the message is to be sent from
$mail->setFrom('danelerhostcrexcum@gmail');

//Set an alternative reply-to address
$mail->addReplyTo('danelerhostcrexcum@gmail');

//Set who the message is to be sent to
$mail->addAddress('danelerhostcrexcum@gmail');

//Set the subject line
$mail->Subject = 'New Character';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
// $mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

/*
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
$mail->Host = "localhost";
/*
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
*
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
*/
?>
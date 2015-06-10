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

$mail->addBCC'email';

$mail->Subject = "New Character";
$mail->Body = '<html><body>
							<table>
							<tr><td><strong>Name:</strong> </td><td>' .$name. '</td></tr>
							<tr><td><strong>Character name:</strong> </td><td>' .$cName. '</td></tr>
							<tr><td><strong>Gender:</strong> </td><td>' .$gender. '</td></tr>
							<tr><td><strong>Abilities:</strong> </td><td>' .$abilities. '</td></tr>
							<tr><td><strong></strong> </td><td>' .$secondaries. '</td></tr>
							</table>
							</body></html>';

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";

/*
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization 
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = 'smtp.gmail.com';  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    
    // Authentication  
    $mail->Username   = 'danelerhostcrexcum@gmail.com'; // Your full Gmail address
    $mail->Password   = 'Daneler4'; // Your Gmail password

    $mail->From = 'danelerhostcrexcum@gmail.com';
    $mail->addAddress("danelerhostcrexcum@gmail.com"); // Where to send it - Recipient
	$mail->addBCC('email'); // Where to send blind carbon copy

	$mail->isHTML(true);
	
    $mail->Subject = 'New Character';      // Subject (which isn't required)
	$mail->Body     = '<html><body>
                                    <table>
                                    <tr><td><strong>Name:</strong> </td><td>' .$name. '</td></tr>
                                    <tr><td><strong>Character name:</strong> </td><td>' .$cName. '</td></tr>
                                    <tr><td><strong>Gender:</strong> </td><td>' .$gender. '</td></tr>
                                    <tr><td><strong>Abilities:</strong> </td><td>' .$abilities. '</td></tr>
									<tr><td><strong></strong> </td><td>' .$secondaries. '</td></tr>
                                    </table>
                                    </body></html>';
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);
  */  
}
?>
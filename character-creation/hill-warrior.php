<?php
if(isset($_POST['submit'])) 
{

$message=
'Name:			'.$_POST['name'].'<br />
Character Name:	'.$_POST['cName'].'<br />
Gender:			'.$_POST['sex'].'<br />
Abilities:		'.if ($_POST['whirlwind'] == 'value1').'
				'.if ($_POST['blockade'] == 'value1').'
				'.if ($_POST['charge'] == 'value1').'
				'.if ($_POST['tosser'] == 'value1').'
				'.if ($_POST['chivalry'] == 'value1').'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "danelerhostcrexcum@gmail.com"; // Your full Gmail address
    $mail->Password   = "Daneler4"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST["danelerhostcrexcum@gmail.com]);
    $mail->AddReplyTo($_POST["danelerhostcrexcum@gmail]);
    $mail->Subject = "New Character";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("recipientemail@gmail.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>
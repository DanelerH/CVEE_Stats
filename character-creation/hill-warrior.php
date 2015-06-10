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
	$mail->SMTPDebug = 2;
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = 'smtp.gmail.com';  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = 'danelerhostcrexcum@gmail.com'; // Your full Gmail address
    $mail->Password   = 'Daneler4'; // Your Gmail password

    $mail->From = 'danelerhostcrexcum@gmail.com';
    $mail->AddAddress("danelerhostcrexcum@gmail.com"); // Where to send it - Recipient

	$mail->isHTML(true);
	
    $mail->Subject = 'New Character';      // Subject (which isn't required)
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);
    
}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="transbox.css">
		<link rel="stylesheet" type="text/css" href="2column.css">
		<link rel="shortcut icon" href="favicon.png"/>
		<title>Name and Abilities</title>
		<style>
			html
			{
				background: url("Background.jpg") no-repeat center center fixed;
				background-size: 100% 100%;
			}
		</style>
	</head>
	<body>
		<div class="transbox">
			<div id="header">
				<h1>Who are you?</h1>
			</div>
			<div id="wrap">
				<div id="col1">
					<form name="myemailform" method="post" action="">
						<p>
							<label for='name'>Name: </label><br>
							<input type="text" name="name">
						</p>
						<p><input type="radio" name="sex" value="male">Male</p>
						<p><input type="radio" name="sex" value="female">Female</p>
						<p><input type="radio" name="race" value="dwarf" checked>Dwarf</p>
						<p><input type="radio" name="variant" value="hill" checked>Hill Dwarf</p>
						<p><input type="radio" name="class" value="warrior" checked>Warrior</p>
				</div>
				<div id="col2">
						<p>
							<label for='cName'>Character name:</label><br>
							<input type="text" name="cName">
						</p>
						<p><INPUT TYPE="checkbox" NAME="whirlwind" onClick="return KeepCount()"> Whirlwind</p>
						<p><INPUT TYPE="checkbox" NAME="blockade" onClick="return KeepCount()"> Blockade</p>
						<p><INPUT TYPE="checkbox" NAME="charge" onClick="return KeepCount()"> Charge</p>
						<p><INPUT TYPE="checkbox" NAME="tosser" onClick="return KeepCount()"> Tosser</p>
						<p><INPUT TYPE="checkbox" NAME="chivalry" onClick="return KeepCount()"> Chivalry</p>
				</div>
			</div>
			<div id="footer">
						<input type="submit" name='submit' value="submit">
					</form>
					<p><?php if(!empty($message)) echo $message; ?></p>
			</div>
		</div>
		<SCRIPT LANGUAGE="javascript">
			function KeepCount()
			{
				var NewCount = 0
				if (document.myemailform.whirlwind.checked)
				{NewCount = NewCount + 1}
				if (document.myemailform.blockade.checked)
				{NewCount = NewCount + 1}
				if (document.myemailform.charge.checked)
				{NewCount = NewCount + 1}
				if (document.myemailform.tosser.checked)
				{NewCount = NewCount + 1}
				if (document.myemailform.chivalry.checked)
				{NewCount = NewCount + 1}
				if (NewCount == 4)
				{document.myemailform; return false;}
			} 
		</SCRIPT>
	</body>
</html>


<html>
<head>
  <title>Contact Form</title>
</head>
<body>
					
		<div style="margin: 100px auto 0;width: 300px;">
			<h3>Contact Form</h3>
			<form name="form1" id="form1" action="" method="post">
					<fieldset>
					  <input type="text" name="fullname" placeholder="Full Name" />
					  <br />
					  <input type="text" name="subject" placeholder="Subject" />
					  <br />
					  <input type="text" name="phone" placeholder="Phone" />
					  <br />
					  <input type="text" name="emailid" placeholder="Email" />
					  <br />
					  <textarea rows="4" cols="20" name="comments" placeholder="Comments"></textarea>
					  <br />
					  <input type="submit" name="submit" value="Send" />
					</fieldset>
			</form>
			<p><?php if(!empty($message)) echo $message; ?></p>
		</div>
					
</body>
</html>
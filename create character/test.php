<?php 
if(isset($_POST['submit'])){
    $to = "myemail@example.com";
    $from = "myemail@example.com";
    $name = $_POST['name'];
    $character_name = $_POST['cName'];
    $subject = "New Character";
    $message = $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    }
?>
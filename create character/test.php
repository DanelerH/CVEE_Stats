<?php

if(isset($_POST['submit'])){
    $to = "danelerhostcrexcum@gmail.com";
    $from = "danelerhostcrexcum@gmail.com";
    $name = $_POST['name'];
    $character_name = $_POST['cName'];
    $subject = "New Character";
    $message = $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    }
?>
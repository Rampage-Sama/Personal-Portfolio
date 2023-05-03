<?php

$name = $_POST['username'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailhearder = "From:".$name."<".$email.">\r\n";

$recipient = "rampage@ofentserampa.co.za";

mail($recipient, $subject, $message, $mailhearder)
or die("Error!");

?>
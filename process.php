<?php

$from="";
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email="fairfield1109@yahoo.com";
$subject=$_POST['subject'];
$message=$_POST['message'];

mail ($fname, $lname, $email, $subject, $message, "FROM:".$from);

Print "Your message has been sent";

?>

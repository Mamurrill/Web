<?php
//get variables from the form
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$message=$_POST['message'];

$email_from = 'vmaj@aggies.ncat.edu';
$emai_subject = "New Form Submission";
$email_body = "User first name: $fname.\n".
    "User last name: $lname.\n".
    "User email: $email.\n".
    "User message: $message.\n";

$to = "fairfield1109@yahoo.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $email \r\n";
mail($to,$emai_subject,$email_body,$headers);
header("Location: contact.html");
?>

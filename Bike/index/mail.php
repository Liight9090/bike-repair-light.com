<?php

if(isset( $_POST['name'])) // looking through html document to find id="name".
$name = $_POST['name'];    // then send me the name or whatever the result is.
if(isset( $_POST['email']))  //the same as above
$email = $_POST['email'];


$content="From: $name"; //grab the name above
$recipient = "firsktk9090@gmail.com"; //owner recieves emails from clients.
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("error");
echo "Email sent!";
?>
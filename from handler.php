<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@omergroupuk.com'

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n". 
                  "User Message: $message.\n";

 $to = 'nchinedu433@gmail.com';     
 
 $headers = "From: $email_from \r\n";

 $headers .= "Reply-To: $visitor_email \r\n";

 maial($to,$email subject, $email body, $headers);

 header("Location: contact.html");



?>
<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@sageuniversity.in';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
              "User name: $visitor_email.\n".
               "subject: $subject.\n".
               "User message: $message.\n";
$to = 'pushpendraamivo@gmail.com';

$headers = "from: $email_from \r\n";

$headers = "reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>
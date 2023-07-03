<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  // Prepare email content
  $to = 'deepaks8404@gmail.com'; // Replace with your email address
  $subject = 'New Form Submission';
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Subject: $subject\n";
  $body .= "Message: $message\n";

  // Send email
  $headers = "From: $name <$email>";
  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully';
  } else {
    echo 'Message not send please retry';
  }
}
?>

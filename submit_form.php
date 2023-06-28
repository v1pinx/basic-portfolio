<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'vipinvipinvipinvipinvipin5@gmail.com';

  // Set the email subject
  $subject = 'New Contact Form Submission: ' . $subject;

  // Build the email content
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message: $message\n";

  // Set the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  $mail_sent = mail($to, $subject, $body, $headers);

  // Check if the email was sent successfully
  if ($mail_sent) {
    echo 'Thank you for your message. We will get back to you soon.';
  } else {
    echo 'Oops! An error occurred while sending your message.';
  }
}
?>

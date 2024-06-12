<?php

// Replace these variables with your own recipient email address and email content
$recipientEmail = 'recipient@example.com';
$subject = 'Test Email';
$message = 'This is a test email sent from PHP using the mail() function.';

// Additional headers
$headers = "From: Your Name <your-email@example.com>\r\n";
$headers .= "Reply-To: Your Name <your-email@example.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

// Send email
if (mail($recipientEmail, $subject, $message, $headers)) {
    $response['status'] = true;
    $response['message'] = 'Successfully sent Mail!';
} else {
    $response['status'] = false;
    $response['message'] = 'Error sending email.';
}

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);

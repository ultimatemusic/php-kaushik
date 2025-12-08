<!-- Write a PHP script to send a test email to a user using the mail() function. -->


<?php
$to = "chauhankaushik7102004@gmail.com"; // Change to the recipient's email address
$subject = "Test Email from PHP";
$message = "Hello! This is a test email sent using PHP's mail() function.";
$headers = "From: 21020201027@darshan.ac.in"; // Change to the sender's email address

// Validate email address before sending
if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid recipient email address.";
}
?>

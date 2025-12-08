
<!--
How to Send Emails in PHP Using the mail() Function:

PHP provides the built-in `mail()` function to send emails directly from a script. The basic syntax is:

```php
mail(to, subject, message, headers, parameters);
```

**Example:**
```php
$to = "test@gmail.com";
$subject = "Test Email";
$message = "This is a test email sent from PHP.";
$headers = "From: sender@gmail.com";

// Validate email before sending
if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid email address.";
}
```

Importance of Validating Email Addresses:n
- Ensures emails are sent to correctly formatted and existing addresses.
- Prevents errors and reduces the risk of sending emails to unintended recipients.
- Helps avoid spam and improves deliverability.
- Use `filter_var($email, FILTER_VALIDATE_EMAIL)` to validate email addresses in PHP.
-->
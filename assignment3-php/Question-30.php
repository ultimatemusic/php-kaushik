<?php
function sanitizeAndValidateEmail($email) {
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
        return $sanitizedEmail;
    } else {
        return false; 
    }
}

$userInput = $_POST['email'] ?? '';

if ($cleanEmail = sanitizeAndValidateEmail($userInput)) {
    echo "Valid email: " . $cleanEmail;
} else {
    echo "Invalid email format.";
}
?>

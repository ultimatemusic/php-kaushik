Write a registration form that validates user input (e.g., email, password) using regular
expressions before submission.
<?php
$email = $password = $error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $emailPattern = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/";
    $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/"; // At least 6 chars, 1 letter, 1 number

    if (!preg_match($emailPattern, $email)) {
        $error .= "Invalid email format.<br>";
    }
    if (!preg_match($passwordPattern, $password)) {
        $error .= "Password must be at least 6 characters long and contain at least one letter and one number.<br>";
    }
    if (!$error) {
        echo "<span style='color:green;'>Registration successful!</span><br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <?php if ($error) echo "<span style='color:red;'>$error</span>"; ?>
    <form method="post">
        Email: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>

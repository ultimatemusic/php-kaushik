<?php
// Start the session
session_start();
// Retrieve session data
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Not set';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not set';
// Retrieve cookie
$user_pref = isset($_COOKIE['user_pref']) ? $_COOKIE['user_pref'] : 'Not set';
?>
<!DOCTYPE html>
<html>
<head><title>Retrieve Session and Cookie</title></head>
<body>
    <h2>Session Data</h2>
    Username: <?php echo htmlspecialchars($username); ?><br>
    Email: <?php echo htmlspecialchars($email); ?><br>
    <h2>Cookie Data</h2>
    User Preference: <?php echo htmlspecialchars($user_pref); ?><br>
    <a href="session_set.php">Back to set page</a>
</body>
</html>

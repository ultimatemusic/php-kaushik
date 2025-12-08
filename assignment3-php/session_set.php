<?php
// Start the session
session_start();
// Store user data in session
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'john@example.com';
// Set a cookie (expires in 1 hour)
setcookie('user_pref', 'dark_mode', time() + 3600, "/");
echo "Session data and cookie have been set. <a href='session_get.php'>Go to next page</a>";

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Welcome to the Login Page</h1>
    <p>Please enter your email ID and password to log in.</p>   
    <form action="login_logic.php" method="POST">
        <label for="email">Email ID:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <button type="submit" name="login">Login</button>
        <br><br>
    </form>
</body>
</html>
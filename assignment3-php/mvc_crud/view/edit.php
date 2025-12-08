<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>
    <h2>Edit User</h2>
    <form method="post">
        Name: <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Back to list</a>
</body>
</html>

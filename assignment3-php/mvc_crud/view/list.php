<!DOCTYPE html>
<html>
<head><title>User List</title></head>
<body>
    <h2>User List</h2>
    <a href="?action=create">Add User</a>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user['id']); ?></td>
            <td><?php echo htmlspecialchars($user['name']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td>
                <a href="?action=edit&id=<?php echo $user['id']; ?>">Edit</a> |
                <a href="?action=delete&id=<?php echo $user['id']; ?>" onclick="return confirm('Delete user?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

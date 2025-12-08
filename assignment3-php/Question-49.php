Create a file upload form that allows users to upload files and handle the uploaded files
safely on the server.
<?php
$uploadDir = 'uploads/';
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['userfile'])) {
    $file = $_FILES['userfile'];
    $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
    $maxSize = 2 * 1024 * 1024; // 2MB

    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $message = 'File upload error.';
    } elseif (!in_array($file['type'], $allowedTypes)) {
        $message = 'Invalid file type.';
    } elseif ($file['size'] > $maxSize) {
        $message = 'File is too large.';
    } else {
        // Sanitize and generate a safe file name
        $safeName = uniqid() . '-' . basename($file['name']);
        $target = $uploadDir . $safeName;
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        if (move_uploaded_file($file['tmp_name'], $target)) {
            $message = 'File uploaded successfully!';
        } else {
            $message = 'Failed to move uploaded file.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <?php if ($message) echo '<p>' . htmlspecialchars($message) . '</p>'; ?>
    <form enctype="multipart/form-data" method="post">
        <input type="file" name="userfile" required>
        <br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>

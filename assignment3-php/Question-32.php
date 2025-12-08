<?php
// Create a script that reads from a text file and displays its content on a web page

$filename = "example.txt";

// Check if file exists
if (file_exists($filename)) {
    // Read file content
    $content = file_get_contents($filename);

    // Display on web page
    echo "<h2>File Content:</h2>";
    echo "<pre>" . htmlspecialchars($content) . "</pre>";
} else {
    echo "The file '$filename' does not exist.";
}
?>

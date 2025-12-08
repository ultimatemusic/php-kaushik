Demonstrate a vulnerable SQL query and then show how to prevent SQL injection using
prepared statements.


// Vulnerable SQL query (Do NOT use this in production)
$username = $_GET['username'];
$password = $_GET['password'];
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
// This query is vulnerable to SQL injection if user input is not sanitized.

// Secure version using prepared statements (mysqli)
$conn = new mysqli('localhost', 'username', 'password', 'database');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
// Now the query is safe from SQL injection attacks.
$stmt->close();
$conn->close();

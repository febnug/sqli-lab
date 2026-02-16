<?php
$conn = new mysqli("db", "root", "rootpass", "sqli_lab");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if not exists
$conn->query("
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
)");

$conn->query("INSERT INTO users (username, password)
VALUES ('admin', 'supersecret')
ON DUPLICATE KEY UPDATE username=username");

$id = $_GET['id'] ?? 1;

$query = "SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($query);

echo "<h2>SQLi Lab</h2>";
echo "<p>Query: $query</p><hr>";

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Username: " . $row['username'] . "<br>";
    echo "Password: " . $row['password'] . "<br><br>";
}
?>

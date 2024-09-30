<?php
$servername = "localhost:3307";  // Keep this as it is unless your server is different
$db_username = "root";  // Your MySQL username
$db_password = "";  // Your MySQL password (leave it blank if no password)
$dbname = "user_system";  // Replace this with the actual database name

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
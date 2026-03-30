<?php
// Database connection parameters
$host = "localhost
";
$username = "root";
$password = "";
// Create connection to the database
$conn = mysqli_connect($host, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS college";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "</br>";
// Select the database
$database = "college";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successfully<br>";
// Create table bca with roll and name
$sql = "CREATE TABLE IF NOT EXISTS bca (
    roll INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully or already exists";
} else {
    echo "Error creating table: " . $conn->error;
}
// Close the connection
$conn->close();
?>
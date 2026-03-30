<?php
// Connection create function
$host = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
// Create database name library
$sql = "CREATE DATABASE IF NOT EXISTS library";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "</br>";
// Select the database
$database = "library";
mysqli_select_db($conn, $database);

// Create table book with id and title and author and price
$sql = "CREATE TABLE IF NOT EXISTS book (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    author VARCHAR(30) NOT NULL,
    price FLOAT(10,2) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully or already exists";
} else {
    echo "Error creating table: " . $conn->error;
}
//insert data into table book
$sqlinsert = "INSERT INTO books (title, author , price)
                        VALUES
                        ('The Great Gatsby', 'F. Scott Fitzgerald', 10.99),
                        ('To Kill a Mockingbird', 'Harper Lee', 12.99),
                        ('1984', 'George Orwell', 11.99),
                        ('Pride and Prejudice', 'Jane Austen', 9.99),
                        ('The Catcher in the Rye', 'J.D. Salinger', 13.99),
                        ('Lord of the Flies', 'William Golding', 10.99)";
if ($conn->query($sqlinsert) === TRUE) {
    echo "Data inserted successfully<br>";
} else {
    echo "Error inserting data: " . $conn->error;
}
// Close the connection
$conn->close();
?>






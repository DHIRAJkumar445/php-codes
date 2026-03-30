<?php
//extra step
$servername = "localhost";
$username = "root";
$password = "";
//jo jo variable baanaye hai usko aise krna padta hai
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//create database
$sql ="CREATE DATABASE IF NOT EXISTS library1";
if($conn-> query($sql) === TRUE){
    echo "Database created successfully <br>";
}
else{
    echo "Error creating database: " . $conn->error;
}
//connect to database
$conn = new mysqli($servername, $username, $password, "library1");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//create table
// Improved: 'author' spelling, VARCHAR(255), id as AUTO_INCREMENT PRIMARY KEY
$sqltable = "CREATE TABLE IF NOT EXISTS books (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    price DECIMAL(10,2)
    )";
if($conn-> query($sqltable) === TRUE){
    echo "Table created successfully<br>";
}
else{
    echo "Error creating table: " . $conn->error;
}   



// Insert data (no id, matches new column names)
$sqlinsert = "INSERT INTO books (title, author, price) VALUES
    ('The Great Gatsby', 'F. Scott Fitzgerald', 10.99),
    ('To Kill a Mockingbird', 'Harper Lee', 12.99),
    ('1984', 'George Orwell', 11.99),
    ('Pride and Prejudice', 'Jane Austen', 9.99),
    ('The Catcher in the Rye', 'J.D. Salinger', 13.99),
    ('Lord of the Flies', 'William Golding', 10.99)
    ";

if($conn-> query($sqlinsert) === TRUE){
    echo "Data inserted successfully<br>";
}
else{
    echo "Error inserting data: " . $conn->error;
}
$conn->close();
?>

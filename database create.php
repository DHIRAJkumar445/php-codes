<?php
//connect mysql but not databse only host and username and password
$host="localhost";
$username="root";
$password= "";
//check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
//create database 
$sql= "CREATE DATABASE IF NOT EXISTS manglam";
if($conn->query($sql) === TRUE){
    echo "Database created successfully or already exists";
}else{
    echo "Error creating database: " . $conn->error;
}
echo "</br>";
//select databse that u have created
$database= "manglam";
$conn= mysqli_connect($host,$username,$password,$database);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "connection succesfully";
//create table of bca with roll and name 
$sql= "CREATE TABLE IF NOT EXISTS bca (
    roll INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL
)";
if($conn->query($sql) === TRUE){
    echo "Table created successfully or already exists";
}else{
    echo "Error creating table: " . $conn->error;
}
?>
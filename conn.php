

<?php
//create databse without opening mysql..
// using pho we will create database and table and 
// insert data into it without opening mysql
$host="localhost";
$username="root";
$password= "";
$conn=mysqli_connect($host,$username,$password);

// Use procedural check for the connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
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

$conn->close();
?>

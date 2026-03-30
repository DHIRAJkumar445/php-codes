<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "college";
// Create connection to the database
$conn = mysqli_connect($host, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
// Insert data into the bca table
$name = "John Doe"; // Example name
$sql = "INSERT INTO bca (name) VALUES ('$name')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close the connection
$conn->close();
?>
<br>

through front end form
<form method="post" action="insert%20data.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <input type="submit" value="Submit">
</form>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "college";
    // Create connection to the database
    $conn = mysqli_connect($host, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Get the name from the form
    $name = $_POST["name"];
    // Insert data into the bca table
    $sql = "INSERT INTO bca (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close the connection
    $conn->close();
}
?>


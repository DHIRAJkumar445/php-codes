<!-- <?php
if (isset($_POST['submit'])) 
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email address.";
    } else {
        echo "Invalid email address.";
}
?>
 // create a form of email and validate email using filter var function 
<form method="post">
    Enter your email: <input type="text" name="email"><br><br>
    <input type="submit" name="submit" value="Submit">
</form> -->
<!-- //pasword is minimum 8 total charcter
//check if password contains digit
<?php
$password = "pass1234"; // Example password
if (strlen($password) >= 8 && preg_match ('/[0-9]/', $password )) {
    echo "Valid password.";
} else {
    echo "Invalid password";
}
?> -->
<!-- // create a form of password and validate password using strlen and preg match function -->
<!-- <form method="post">
    Enter your password: <input type="text" name="password"><br><br>
    <input type="submit" name="submit" value="Submit">
</form> -->
<!-- <?php
// design a chess boaerd using html in php ising loop with color.
$size = 8; // Size of the chessboard
echo "<table border='1' cellspacing='0' cellpadding='0'>";  
for ($row = 0; $row < $size; $row++) {
    echo "<tr>";
    for ($col = 0; $col < $size; $col++) {
        $color = ($row + $col) % 2 == 0 ? "white" : "black";
        echo "<td style='width:50px; height:50px; background-color:$color;'></td>";
    }
    echo "</tr>";
}
echo "</table>";
?> -->
<!-- //chnage this sentence to word php is the scripting language.
<?php
$sentence = "php is the scripting language.";
$words = explode(" ", $sentence);
foreach ($words as $word) {
    echo $word . "<br>";
}
?> -->
// desplay question using radio button using html in php all store in under boeder

<form method="post">
    <h1>Quiz</h1>
    <p>What is the capital of France?</p>
    <input type="radio" name="answer" value="Paris"> Paris<br>
    <input type="radio" name="answer" value="London"> London<br>
    <p>what is capital of Italy?</p>
    <input type="radio" name="answer2" value="Rome"> Rome<br>
    <input type="radio" name="answer2" value="Madrid"> Madrid<br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST['submit'])) {
    $answer1 = $_POST['answer'];
    $answer2 = $_POST['answer2'];
    if ($answer1 == "Paris") {
        echo "Correct answer for question 1.<br>";
    } else {
        echo "Incorrect answer for question 1.<br>";
    }
    if ($answer2 == "Rome") {
        echo "Correct answer for question 2.<br>";
    } else {
        echo "Incorrect answer for question 2.<br>";
    }
}
?>
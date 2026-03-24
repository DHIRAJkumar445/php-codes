<?php

$number = 10;

if ($number % 2 == 0) {
    echo "Number $number is Even<br>";
} else {
    echo "Number $number is Odd<br>";
}

$username = "admin";
$password = "1234";

if ($username == "admin" && $password == "1234") {
    echo "Login Successful<br>";
} else {
    echo "Invalid Username or Password<br>";
}


$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year<br>";
} else {
    echo "$year is not a Leap Year<br>";
}


$char = 'a';

$char = strtolower($char);

if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
    echo "Character '$char' is a Vowel<br>";
} else {
    echo "Character '$char' is a Consonant<br>";
}
?>


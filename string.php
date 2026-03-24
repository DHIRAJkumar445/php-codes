<?php
$name = "John Doe";
echo 'hello $name';
//length of string
echo strlen("hello");
//counting words in string
echo str_word_count("hello world");
//reverse string
echo strrev("hello");
//find position of substring
echo strpos("hello world", "world");
//replace substring
echo str_replace("world", "PHP", "hello world");
//remove extra spaces
$str = "hello";
echo trim($str);


// comparing strings
$str1 = "Hello";
$str2 = "hello";
if (strcmp($str1, $str2) == 0) {
    echo "Strings are equal";
} else {
    echo "Strings are not equal";
}
// captialize first word of string
echo ucfirst("hello world");
// capitalize first letter of each word
echo ucwords("hello world");
// make first letter lowercase
echo lcfirst("Hello World");
// repeat string
echo str_repeat("PHP ", 3);
// Extract part of string
$str = "Welcome to PHP ";
echo substr($str, 0, 7);
echo "</br>";
// convert string to array
$str = "apple,banana,orange";
$arr = explode(",", $str);
print_r($arr);
echo "</br>";
// convert array to string
$arr = ["apple", "banana", "orange"];
$str = implode(",", $arr);
// converting string to lowercase
$string = "welcome to BCA class";
$string = strtolower($string);
echo $string;
echo "</br>";
// converting string to uppercase
$string = "welcome to BCA class";
$string = strtoupper($string);
echo $string;
echo "</br>";




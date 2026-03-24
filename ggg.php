<?php
// Counting the number of elements in an array
$marks = [85, 90, 78, 92, 88];
$count = count($marks);

echo "Number of marks: " . $count;
echo "<br><hr>";



// Sorting an array
$arr = [5, 2, 9, 1, 7];

sort($arr);          // Ascending order
print_r($arr);
echo "<br>";

rsort($arr);         // Descending order
print_r($arr);
echo "<br><hr>";



// Searching for an element in an array
$colors = ["red", "green", "blue", "yellow"];

if (in_array("green", $colors)) {
    echo "Green is in the array.";
} else {
    echo "Green is not in the array.";
}

echo "<br><hr>";



// Adding and removing element at the end of an array
$arr = [1, 2, 3];

array_push($arr, 4);     // Add element at end
print_r($arr);
echo "<br>";

array_pop($arr);         // Remove last element
print_r($arr);
echo "<br><hr>";



// Adding and removing element at the beginning of an array
array_shift($arr);       // Remove first element
print_r($arr);
echo "<br>";

array_unshift($arr, 0);  // Add element at beginning
print_r($arr);
echo "<br><hr>";



// Merging two arrays
$a = [1, 2];
$b = [3, 4];

$c = array_merge($a, $b);
print_r($c);
echo "<br><hr>";



// Remove duplicates from an array
$arr = [1, 2, 2, 3, 3];
print_r(array_unique($arr));
echo "<br><hr>";



// Reverse an array
print_r(array_reverse($arr));
echo "<br><hr>";



// Part of an array
$arr = [10, 20, 30, 40, 50];
print_r(array_slice($arr, 1, 2));   // From index 1, take 2 elements
echo "<br><hr>";



// Array to string
$arr = ["BCA", "MCA", "MBA"];
echo implode(", ", $arr);
echo "<br><hr>";



// String to array
$str = "Apple, Mango, Banana";
print_r(explode(", ", $str));

?>
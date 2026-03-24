<?php
//counting the number of elements in an array
$marks = [85, 90, 78, 92, 88];
$count = count($marks);
echo "Number of marks: " . $count;
echo "</br>";
 echo "<hr>";
 //sorting an array
 $arr = [5, 2, 9, 1, 7];
    sort($arr);
    print_r($arr);
    rsort($arr);
    print_r($arr);//reverse sorting
    echo "<hr>";
 echo "</br>";
 //serching for an element in an array
 $colors = ["red", "green", "blue", "yellow"];
 if (in_array("green", $colors)) {
     echo "Green is in the array.";
 } else {
     echo "Green is not in the array.";
 }

?>
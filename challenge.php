<?php

$users = ["Alice", "Bob", "Charlie", "David"];
$totalUsers = count($users);
echo "Total Registered Users: " . $totalUsers;
echo "<hr>";
$cart = ["item1", "item2", "item3"];
echo "Cart before undo: ";
print_r($cart);
array_pop($cart);
echo "</br>";
echo "Cart after undo: ";
print_r($cart);
echo "<hr>";
//problem statement: urgent task must appear first.
//impact: improper task order.
//solution: array_unshift()-adds element at beginning.
$tasks = ["Task 1", "Task 2", "Task 3"];
echo "Tasks before adding urgent task: ";
print_r($tasks);
array_unshift($tasks, "Urgent Task");
echo "</br>";
echo "Tasks after adding urgent task: ";
print_r($tasks);
echo "<hr>";
//problem statement: old notification must be removed.
//impact: dashboard clutter.
//solution: array_shift()-removes first element.
$notifications = ["Notification 1", "Notification 2", "Notification 3"];
echo "Notifications before removing old one: ";
print_r($notifications);
array_shift($notifications);
echo "</br>";
echo "Notifications after removing old one: ";
print_r($notifications);
echo "<hr>";
//problem statement: combine two product array.
//impact: incomplete catalog.
//solution: array_merge()-merges arrays.
$products1 = ["Product A", "Product B"];
$products2 = ["Product C", "Product D"];
echo "Products before merging: ";
print_r($products1);
echo "</br>";
echo "Products to merge: ";
print_r($products2);
$mergedProducts = array_merge($products1, $products2);
echo "</br>";
echo "Merged Products: ";
print_r($mergedProducts);
echo "<hr>";
//problem statement: identify students enrolled in two courses.
//impact:canot track overlaps 
//solution: array_intersect()-finds common elements.
$course1 = ["bca", "mca", "bba"];
$course2 = ["bca", "mca", "mba"];
echo "Students in Course 1: ";
print_r($course1);
echo "</br>";
echo "Students in Course 2: ";
print_r($course2);
$commonStudents = array_intersect($course1, $course2);
echo "</br>";
echo "Students enrolled in both courses: ";
print_r($commonStudents);
echo "<hr>";
//problem statement: compare submitted vs  expected list.
//impact: cannot identify defaulters.
//solution: array_diff()-finds differences.
$expectedList = ["item1", "item2", "item3"];
$submittedList = ["item1", "item3", "item4"];
echo "Expected List: ";
print_r($expectedList);
echo "</br>";
echo "Submitted List: ";
print_r($submittedList);
$differences = array_diff($expectedList, $submittedList);
echo "</br>";
echo "Missing Items: ";
print_r($differences);
echo "<hr>";
?>
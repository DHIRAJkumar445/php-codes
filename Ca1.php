<!DOCTYPE html>
<html>
<head>
    <title>PHP Assignment</title>
</head>
<body>

<h2>Q1. Scholarship Calculation</h2>

<form method="post">
    sub1: <input type="number" name="sub1" required><br><br>
    shub2: <input type="number" name="sub2" required><br><br>
    sub3: <input type="number" name="sub3" required><br><br>
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if(isset($_POST['calculate'])) {

    $sub1 = $_post['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];

    $total = $sub1 + $sub2 + $sub3;
    $percentage = ($total / 300) * 100;

    echo "<h3>Result:</h3>";
    echo "Total Marks: $total <br>";
    echo "Percentage: $percentage % <br>";

    if ($percentage > 90) {
        echo "Scholarship Awarded: 70%";
    }
    elseif ($percentage >= 70 && $percentage <= 90) {
        echo "Scholarship Awarded: 60%";
    }
    elseif ($percentage >= 40 && $percentage < 70) {
        echo "Scholarship Awarded: 40%";
    }
    else {
        echo "No Scholarship";
    }
}
?>

<hr>

<h2>Q2. Pattern Output</h2>

<?php
for ($i = 1; $i <= 4; $i++) {

    if ($i % 2 != 0) {
        for ($j = 1; $j <= 2; $j++) {
            echo $j;
        }
    } else {
        for ($j = 1; $j <= 3; $j++) {
            echo $j;
        }
    }

    echo "<br>";
}
?>

<hr>

<h2>Q3. Factorial Using Recursion</h2>

<?php
function factorial($num) {
    if ($num <= 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

$number = 5;
echo "Factorial of $number is: " . factorial($number);
?>

<hr>

<h2>Q4. Area of Circle (Using Constant)</h2>

<?php
define("PI", 3.1416);

$radius = 7;
$area = PI * $radius * $radius;

echo "Area of Circle with radius $radius is: $area";
?>

</body>
</html>
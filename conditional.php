<?php
$percentage = 85;

echo "Percentage: $percentage% <br>";


if ($percentage >= 75) {
    echo "Result:distinction <br>";
    echo "Grade: A+<br>";
}
elseif ($percentage >= 60) {
    echo "Result: first division <br>";
    echo "Grade: A<br>";
}
elseif ($percentage >= 50) {
    echo "Result: second division <br>";
    echo "Grade: B+ <br>";
}
elseif ($percentage >= 40) {
    echo "Result: Pass <br>";
    echo "Grade: B<br>";
}
elseif ($percentage <= 40) {
    echo "Result: fail <br>";
    echo "Grade: f<br>";
}

echo "<br>";
$a = 25;
$b = 40;
$c = 30;

if ($a >= $b && $a >= $c) {
    echo "Biggest number is: $a";
}
elseif ($b >= $a && $b >= $c) {
    echo "Biggest number is: $b";
}
else {
    echo "Biggest number is: $c";
}
?>

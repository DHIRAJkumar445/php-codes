<?php
$numbers=[12, 10, 15, 5, 8];
$n = count($numbers);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numbers[$j] > $numbers[$j + 1]) {
            // Swap
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}
echo "Sorted array: \n";
foreach ($numbers as $number) {
    echo $number . " ";
}
?>
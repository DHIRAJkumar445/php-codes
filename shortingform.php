<html>
<head>
    <title>Sorting Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center><h1>Sorting an Array in PHP</h1>
    <form method="post">
        <input type="submit" name="sort" value="Sort Array">
<?php
$numbers=[5,2,9,1,7];
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
    </form>
    </center>
</body>
</html>
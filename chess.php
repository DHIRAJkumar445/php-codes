<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 60px;
            height: 60px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<h2>Chess Board</h2>

<table border="1">
<?php
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    
    for ($col = 1; $col <= 8; $col++) {
        if (($row + $col) % 2 == 0) {
            echo "<td class='white'></td>";
        } else {
            echo "<td class='black'></td>";
        }
    }

    echo "</tr>";
}
?>
</table>

</body>
</html>
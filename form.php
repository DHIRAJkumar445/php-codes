<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<form method="post" action="">
    Enter First Number:
    <input type="text" name="num1"><br><br>

    Enter Second Number:
    <input type="text" name="num2"><br><br>

    Select Operation:
    <select name="op">
        <option value="">--Select--</option>
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<hr>

<?php
if (isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['op'];

    if ($num1 === "" || $num2 === "" || $op === "") {
        echo "Please fill all fields.";
    } else {
        switch ($op) {
            case "add":
                echo "Addition = " . ($num1 + $num2);
                break;

            case "sub":
                echo "Subtraction = " . ($num1 - $num2);
                break;

            case "mul":
                echo "Multiplication = " . ($num1 * $num2);
                break;

            case "div":
                if ($num2 != 0) {
                    echo "Division = " . ($num1 / $num2);
                } else {
                    echo "Error: Division by zero";
                }
                break;

            default:
                echo "Invalid Operation";
        }
    }
}
?>

</body>
</html>
<?php
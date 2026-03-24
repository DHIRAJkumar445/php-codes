<?php
if ( ! isset($_GET['name']) ) {
    die("Name parameter missing");
}

if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}

$names = array("Rock","Paper","Scissors");

function check($computer, $human) {
    if ( $computer == $human ) return "Tie";
    if ( ($human == 0 && $computer == 2) ||
         ($human == 1 && $computer == 0) ||
         ($human == 2 && $computer == 1) ) {
        return "You Win";
    }
    return "You Lose";
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Welcome <?php echo htmlentities($_GET['name']); ?></h1>

<form method="POST">
<select name="human">
<option value="-1">Select</option>
<option value="0">Rock</option>
<option value="1">Paper</option>
<option value="2">Scissors</option>
<option value="3">Test</option>
</select>

<input type="submit" value="Play">
<input type="submit" name="logout" value="Logout">
</form>

<pre>
<?php
if ( isset($_POST['human']) ) {
    if ( $_POST['human'] == -1 ) {
        print "Please select a strategy";
    } else if ( $_POST['human'] == 3 ) {
        for($c=0;$c<3;$c++) {
            for($h=0;$h<3;$h++) {
                $r = check($c, $h);
                print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
            }
        }
    } else {
        $computer = rand(0,2);
        $result = check($computer, $_POST['human']);
        print "Your Play=".$names[$_POST['human']];
        print " Computer Play=".$names[$computer];
        print " Result=".$result;
    }
}
?>
</pre>

</body>
</html>
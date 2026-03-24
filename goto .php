<?php
echo "hello<br>";
echo "welcome<br>";

$marks = 35;

if ($marks < 40) {
    goto a;
}

echo "how are you<br>";

a:
echo "you are failed";
?>
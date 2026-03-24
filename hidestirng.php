<?php
$mobile = "6206382586";
// Hide the middle 4 digits
$hidden = str_repeat("*", 6) . "****" . substr($mobile, -4);
echo "Original Mobile Number: " . $mobile . "<br>";
echo "Hidden Mobile Number: " . $hidden;
?>
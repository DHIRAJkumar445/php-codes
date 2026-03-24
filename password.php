<?php
//password is minimum 8 total characters
// check if password contains digit
$password = "abc12345";
if (strlen($password) >= 8 && preg_match('/[0-9]/', $password)) {
    echo "strong password: " . $password;
} else {
    echo "weak password.";
}
?>

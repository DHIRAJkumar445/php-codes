<?php
if(isset($_POST['submit'])) {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email address: " . $email;
    } else {
        echo "Invalid email address: " . $email;
    }
}
?>


<form method="post">
    enter email: <input type="text" name="email">
    <input type="submit" name="submit" value="Validate">
</form>

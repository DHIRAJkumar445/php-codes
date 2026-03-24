<html>
<form method="post">
name:<input type="text" name="name"><br>
age:<input type="number" name="age"><br>
marks:<input type="number" name="marks"><br>
<input type="submit" name="submit" value="press the button">

</form>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $marks = $_POST['marks'];

    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Marks: " . $marks . "<br>";
}
?>
</html>
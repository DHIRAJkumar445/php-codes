<html>
    <form action="method">
enter name: <input type="text" name="text" required><br>
enter number: <input type="number" name="number" required><br>
enter city: <input type="text" name="name" required><br>
<input type="submit" name="submit"><br>
    </form>
    <?php
if(isset($_POST['submit'])) {
    $a =[$_POST['text'], $_POST['number'], $_POST['name']];
    print_r($a);
}
?>
</html>
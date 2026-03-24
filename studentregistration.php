<?php
$msg = "";
$name = $email = $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $course = $_POST['course'];

    $msg = "Student Registered Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .form-box {
            width: 320px;
            background: white;
            padding: 20px;
            margin: 40px auto;
            border-radius: 6px;
            box-shadow: 0 0 8px #aaa;
        }
        input, select {
            width: 100%;
            padding: 7px;
            margin: 7px 0;
        }
        button {
            width: 100%;
            background: #28a745;
            color: white;
            border: none;
            padding: 8px;
            cursor: pointer;
        }
        .result {
            margin-top: 15px;
            background: #e9f7ef;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="form-box">
    <h3 align="center">Student Form</h3>

    <form method="post">
        <input type="text" name="name" placeholder="Student Name" required>
        <input type="email" name="email" placeholder="Email" required>

        <select name="course" required>
            <option value="">Select Course</option>
            <option>BCA</option>
            <option>BSc</option>
            <option>BTech</option>
            <option>MCA</option>
        </select>

        <button type="submit">Register</button>
    </form>

    <!-- Success Message -->
    <p style="color:green; text-align:center;"><?php echo $msg; ?></p>

    <!-- Previous Submission -->
    <?php if ($name != "") { ?>
        <div class="result">
            <strong>Previous Submission:</strong><br>
            Name: <?php echo $name; ?><br>
            Email: <?php echo $email; ?><br>
            Course: <?php echo $course; ?>
        </div>
    <?php } ?>
</div>

</body>
</html>

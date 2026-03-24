<!DOCTYPE html>
<html>
<head>
    <title>Student Scholarship Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 30px;
            padding: 20px;
            background-color: #e8f5e9;
            border-left: 5px solid #4CAF50;
            border-radius: 4px;
        }
        .result h2 {
            color: #2e7d32;
            margin-top: 0;
        }
        .result-item {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }
        .scholarship-good {
            background-color: #d4edda;
            padding: 15px;
            border-radius: 4px;
            margin-top: 15px;
            border: 1px solid #c3e6cb;
        }
        .scholarship-bad {
            background-color: #f8d7da;
            padding: 15px;
            border-radius: 4px;
            margin-top: 15px;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>12th Standard Student Scholarship Calculator</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter student name" required>
            </div>

            <div class="form-group">
                <label for="subject1">Subject 1 Marks (out of 100):</label>
                <input type="number" id="subject1" name="subject1" min="0" max="100" placeholder="Enter marks" required>
            </div>

            <div class="form-group">
                <label for="subject2">Subject 2 Marks (out of 100):</label>
                <input type="number" id="subject2" name="subject2" min="0" max="100" placeholder="Enter marks" required>
            </div>

            <div class="form-group">
                <label for="subject3">Subject 3 Marks (out of 100):</label>
                <input type="number" id="subject3" name="subject3" min="0" max="100" placeholder="Enter marks" required>
            </div>

            <button type="submit" name="submit">Calculate Scholarship</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $subject1 = (int)$_POST['subject1'];
            $subject2 = (int)$_POST['subject2'];
            $subject3 = (int)$_POST['subject3'];

            // Calculate total and percentage
            $total_marks = $subject1 + $subject2 + $subject3;
            $max_marks = 300;
            $percentage = ($total_marks / $max_marks) * 100;

            // Determine scholarship
            $scholarship_percentage = 0;
            $scholarship_status = "";

            if ($percentage > 90) {
                $scholarship_percentage = 70;
                $scholarship_status = "70% Scholarship Awarded";
            } elseif ($percentage >= 70 && $percentage <= 90) {
                $scholarship_percentage = 60;
                $scholarship_status = "60% Scholarship Awarded";
            } elseif ($percentage >= 40 && $percentage < 70) {
                $scholarship_percentage = 40;
                $scholarship_status = "40% Scholarship Awarded";
            } else {
                $scholarship_percentage = 0;
                $scholarship_status = "No Scholarship";
            }

            // Display results
            $scholarship_class = ($scholarship_percentage > 0) ? "scholarship-good" : "scholarship-bad";
            ?>
            
            <div class="result">
                <h2>Scholarship Calculation Results</h2>
                
                <div class="result-item">
                    <strong>Student Name:</strong> <?php echo $name; ?>
                </div>
                <div class="result-item">
                    <strong>Subject 1 Marks:</strong> <?php echo $subject1; ?>/100
                </div>
                <div class="result-item">
                    <strong>Subject 2 Marks:</strong> <?php echo $subject2; ?>/100
                </div>
                <div class="result-item">
                    <strong>Subject 3 Marks:</strong> <?php echo $subject3; ?>/100
                </div>
                <div class="result-item">
                    <strong>Total Marks:</strong> <?php echo $total_marks; ?>/<?php echo $max_marks; ?>
                </div>
                <div class="result-item">
                    <strong>Percentage:</strong> <?php echo number_format($percentage, 2); ?>%
                </div>

                <div class="<?php echo $scholarship_class; ?>">
                    <strong style="font-size: 18px;">
                        <?php echo $scholarship_status; ?>
                    </strong>
                    <?php if ($scholarship_percentage > 0) { ?>
                        <div style="margin-top: 10px;">
                            <strong>Scholarship Amount:</strong> <?php echo $scholarship_percentage; ?>% of tuition fee
                        </div>
                    <?php } ?>
                </div>
            </div>

            <?php
        }
        ?>
    </div>
</body>
</html>

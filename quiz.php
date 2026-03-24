<html>
<head>
    <title>Quiz</title>
</head>
<body>
<h2>Quiz</h2>
<input type="radio" name="q1" value="Paris"> Paris<br>
<input type="radio" name="q1" value="London"> London<br>
<input type="radio" name="q1" value="Berlin"> Berlin<br>
<button>Submit</button>
</body></html>
<?php
$questions = [
    "What is the capital of France?" => "Paris",
    "What is 2 + 2?" => "4",
    "What is the largest planet in our solar system?" => "Jupiter"
];
foreach ($questions as $question => $answer) {
    echo "<p><strong>$question</strong></p>";
    echo "<p>Answer: $answer</p>";
}
?>



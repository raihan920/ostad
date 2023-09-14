<?php
// Task 3: Grade Calculator

// Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. 

// Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).

// Or, declare 3 variable test scores and calculate the average and display it along with the corresponding grade (A, B, C, D, F)

function calculate_grade($x, $y, $z)
{
    $grade = '';
    $avg = ($x + $y + $z) / 3;
    if ($avg < 40) {
        $grade = 'F';
    } elseif ($avg >= 40 && $avg < 50) {
        $grade = 'D';
    } elseif ($avg >= 50 && $avg < 60) {
        $grade = 'C';
    } elseif ($avg >= 60 && $avg < 70) {
        $grade = 'B';
    } elseif ($avg >= 70 && $avg < 80) {
        $grade = 'A';
    }
    $result = "Average score: " . $avg . ", Grade: " . $grade;
    return $result;
}

$finalResult = '';

if (($_SERVER['REQUEST_METHOD'] == "POST") && ($_POST['submit'] == "Calculate Grade")) {
    $finalResult = calculate_grade($_POST['sub1'], $_POST['sub2'], $_POST['sub3']);
}
?>
<!DOCTYPE html>
<html>

<body>
    <h2>Calculate Grade</h2>
    <form action="" method="POST">
        <label for="sub1">Subject 1 score(0-79):</label><br>
        <input type="number" id="sub1" name="sub1" min="0" max="79" required><br>
        <label for="sub2">Subject 2 score(0-79):</label><br>
        <input type="number" id="sub2" name="sub2" min="0" max="79" required><br>
        <label for="sub3">Subject 3 score(0-79):</label><br>
        <input type="number" id="sub3" name="sub3" min="0" max="79" required><br>
        <label for="lname">Acquired Result: </label><br>
        <span style="color: green;"> <?php echo (!empty($finalResult)) ? $finalResult : ''; ?> </span> <br><br>
        <input type="submit" name="submit" value="Calculate Grade">
    </form>
</body>

</html>
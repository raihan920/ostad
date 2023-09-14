<?php
// Task 7: Simple Calculator

// Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.

// Complete these tasks by writing PHP code that fulfills the requirements of each task. Feel free to enhance the tasks or add extra features if you'd like. 

// This assignment will help you practice your PHP skills and apply the concepts you've learned. Good luck!


function calculator($x, $y, $operatrion)
{
    $result = '';
    if ($operatrion == 'add') {
        $result = $x + $y;
    } elseif ($operatrion == 'subtract') {
        $result = $x - $y;
    } elseif ($operatrion == 'multiply') {
        $result = $x * $y;
    } elseif ($operatrion == 'divide') {
        $result = $x / $y;
    }
    return $result;
}

$finalResult = '';

if (($_SERVER['REQUEST_METHOD'] == "POST") && ($_POST['submit'] == "Calculate")) {
    $finalResult = calculator($_POST['num1'], $_POST['num2'], $_POST['operation']);
}

?>

<!DOCTYPE html>
<html>

<body>
    <h2>Basic Calculator</h2>
    <form action="" method="POST">
        <label for="num1">Input number 1:</label><br>
        <input type="number" id="num1" name="num1" required><br>
        <label for="num2">Input number 2:</label><br>
        <input type="number" id="num2" name="num2" required><br>
        <label for="operation">Operation</label>
        <select id="operation" name="operation" required>
            <option value="">Select an operation</option>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br>
        <label for="lname">Result: </label><br>
        <span style="color: green;"> <?php echo (!empty($finalResult)) ? $finalResult : ''; ?> </span> <br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>

</html>
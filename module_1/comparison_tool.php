<?php
// Task 6: Comparison Tool

// Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. 

// Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.

// Or, declare 2 varia4ble numbers and use the ternary operator to determine the large number and display the result

function calculate_larger_number($x, $y){
    $result = ($x>$y)?$x:(($y>$x)?$y:'None');
    return $result;
}

$finalResult = '';

if (($_SERVER['REQUEST_METHOD'] == "POST") && ($_POST['submit'] == "Calculate Larger Number")) {
    $finalResult = "The greater number between {$_POST['num1']} and {$_POST['num2']} is ".calculate_larger_number($_POST['num1'], $_POST['num2']);
}

?>

<!DOCTYPE html>
<html>

<body>
    <h2>Larger Number Calculator</h2>
    <form action="" method="POST">
        <label for="num1">Input number 1:</label><br>
        <input type="number" id="num1" name="num1" required><br>
        <label for="num2">Input number 2:</label><br>
        <input type="number" id="num2" name="num2" required><br>
        
        <label for="lname">Result: </label><br>
        <span style="color: green;"> <?php echo (!empty($finalResult)) ? $finalResult : ''; ?> </span> <br><br>
        <input type="submit" name="submit" value="Calculate Larger Number">
    </form>
</body>

</html>
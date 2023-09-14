<?php
// Task 4: Even or Odd Checker

// Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.

function check_even_odd($x){
    $result = '';
    if($x%2==0){
        $result = "even";
    }else{
        $result = "odd";
    }
    return $x." is an ".$result." number";
}

$finalResult = '';

if (($_SERVER['REQUEST_METHOD'] == "POST") && ($_POST['submit'] == "Calculate Even Odd")) {
    $finalResult = check_even_odd($_POST['num']);
}
?>
<!DOCTYPE html>
<html>

<body>
    <h2>Even Odd Calculator</h2>
    <form action="" method="POST">
        <label for="num">Input a number to check even or odd:</label><br>
        <input type="number" id="num" name="num" required><br>
        
        <label for="lname">Result: </label><br>
        <span style="color: green;"> <?php echo (!empty($finalResult)) ? $finalResult : ''; ?> </span> <br><br>
        <input type="submit" name="submit" value="Calculate Even Odd">
    </form>
</body>

</html>
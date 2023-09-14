<?php
// Task 2: Temperature Converter

// Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit.

// Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.

// Or, Declare 3 variable temperature values and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.

function celsius_to_fahrenheit($c)
{
    $f = ($c*(9/5)+32);
    return $f;
}

function fahrenheit_to_celsius($f)
{
    $c = ($f - 32) * (5 / 9);
    return $c;
}

// echo celsius_to_fahrenheit(26).PHP_EOL;
// echo fahrenheit_to_celsius(50);
$convertedValue = '';

if (($_SERVER['REQUEST_METHOD'] == "POST") && ($_POST['submit'] == "Celsius to Fahrenheit")) {
    $convertedValue = $_POST['temperature'] . " degree celcius is equal to " . celsius_to_fahrenheit($_POST['temperature']) . " degree fahrenheit";
}
if (($_SERVER['REQUEST_METHOD'] == "POST") && ($_POST['submit'] == "Fahrenheit to Celsius")) {
    $convertedValue = $_POST['temperature'] . " degree fahrenheit is equal to " . fahrenheit_to_celsius($_POST['temperature']) . " degree celcius";
}
?>
<!DOCTYPE html>
<html>

<body>

    <h2>Temperature Calculator</h2>

    <form action="" method="POST">
        <label for="temperature">Temperature:</label><br>
        <input type="number" id="temperature" name="temperature" required><br>
        <label for="lname">Converted Value: </label><br>
        <span style="color: green;"> <?php echo (!empty($convertedValue)) ? $convertedValue : ''; ?> </span> <br><br>
        <input type="submit" name="submit" value="Celsius to Fahrenheit">
        <input type="submit" name="submit" value="Fahrenheit to Celsius">
    </form>
</body>

</html>
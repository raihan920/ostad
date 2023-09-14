<?php
// Task 5: Weather Report

// Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."
//calculated in degree Celsius
$temperature = -12;

if($temperature < -2){
    echo "It's freezing!";
}else if($temperature >= 13 && $temperature < 19){
    echo "It's cool.";
}else if($temperature >= 19 && $temperature < 28){
    echo "It's warm.";
}else{
    echo "Undefined Temperature!";
}


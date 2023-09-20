<?php

// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.

$num1 = 0;
$num2 = 1;
$num3 = 0;

for($i = 0; $i<10; $i++){        
    $num3 = $num1+$num2;
    
    if($num3 > 100){
        break;
    }

    echo $num3.' ';
    
    $num1 = $num2;
    $num2 = $num3;
}
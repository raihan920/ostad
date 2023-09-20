<?php
// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.

function generate_fibonacci($length){
    $num1 = 0;
    $num2 = 1;

    for($i = 0; $i<$length; $i++){
        $num3 = $num1+$num2;
        
        echo $num3.' ';
        
        $num1 = $num2;
        $num2 = $num3;
    }    
}

generate_fibonacci(15);
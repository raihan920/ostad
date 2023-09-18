<?php
// Create a PHP script using a loop to print all even numbers between 1 and 10
for ($i=0; $i<=10; $i++){
    if(($i%2)==0){
        echo $i.PHP_EOL;
    }
}

// Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.
function greet($name){
    echo "Hello ".$name.PHP_EOL;
}
greet("Ostad");

// Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.
function factorial($f){
    $fact = 1;
    for ($i=$f;$i>=1;$i--){
        $fact = $fact*$i;
    }
    return $fact;
}
$x = 6;
echo factorial($x).PHP_EOL;

// Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers
$num1 = 0;
$num2 = 1;
$n = 0;

while($n < 10){
    $num3 = $num1+$num2;
    
    echo $num3.' ';
    
    $num1 = $num2;
    $num2 = $num3;

    $n++;
}
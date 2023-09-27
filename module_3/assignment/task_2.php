<?php
// Task 2: Array Manipulation

// Create an array called $numbers containing the numbers 1 to 10. 
// Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

function remove_even($numbers){
    foreach($numbers as $key=>$val){
        if(($val%2) == 0){
            unset($numbers[$key]);
        }
    }
    print_r($numbers);
}


$numbers = array(1,2,3,4,5,6,7,8,9,10);
remove_even($numbers);
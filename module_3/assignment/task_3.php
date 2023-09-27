<?php
// Task 3: Array Sorting  

// Create an array called $grades with the following values: 85, 92, 78, 88, 95.
// Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.

function descending_sort($grades){
    rsort($grades);
    print_r($grades);
}

$grades = array(85, 92, 78, 88, 95);
descending_sort($grades);

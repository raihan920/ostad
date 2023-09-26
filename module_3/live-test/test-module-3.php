<?php
// Task 1:

// Create an associative array called $student with the following key-value pairs:

// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'

// Print the age of the student.

$student['name'] = 'alice';
$student['age'] = 22;
$student['grade'] = 'A';

echo $student['age'];


echo PHP_EOL;
// Task 2:

// Create an associative array called $student with the key-value pairs:

// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'

// Check if the 'grade' key exists in the array using array_key_exists() and print the result.

$student['name'] = 'alice';
$student['age'] = 22;
$student['grade'] = 'A';

if(array_key_exists('grade', $student)){
    echo $student['grade'];
}


echo PHP_EOL;
// Task 3:

// Create an array called $numbers with values 100, 200, 50, 40, 50.

// Use a foreach loop to print each value in the array.

$numbers = array(100, 200, 50, 40, 50);
foreach($numbers as $number){
    echo $number.' ';
}


echo PHP_EOL;
// Task 4:

// Create an array called $names with values 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', ‘Moni’.

// Use the array_filter() function to filter names that start with the letter 'M'.

// Print the filtered names.

function name_check($names){    
    return str_starts_with($names,'M');
}

$names = array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');
$filtedNames = array_filter($names, 'name_check');

print_r($filtedNames);



echo PHP_EOL;
// Task 5:

// Create a string variable $originalString with the value 'Hello, World!'.

// Use the strrev() function to reverse the string.

// Print the reversed string.

$originalString = 'Hello, World!';
echo strrev($originalString);
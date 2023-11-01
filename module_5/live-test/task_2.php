<?php
// Task 2: .

// Write a PHP code to append new data to an existing text file.

// Use the following template:
 

$file = "./data.txt";

$data = 'Karim';

 

// Open the file in append mode
$openedFile = fopen($file, "a");



// Write the data to the file
fwrite($openedFile, $data."\n");



// Close the file
fclose($openedFile);


?>
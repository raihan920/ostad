<?php
// Task 1:

// Write a PHP code to read the content of a text file and display it on the webpage.

// Use the following template:
 

$file = "./data.txt";

 

// Open the file
$openedFile = fopen($file, "r");


// Read the content of the file
while($readData = fgets($openedFile)){
    echo $readData;
}


// Close the file
fclose($openedFile);



// Display the content
echo $readData;


?>
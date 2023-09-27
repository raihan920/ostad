<?php
// Task 5: Password Generator

// Create a PHP function called generatePassword($length) that generates a random password of the specified length.
// The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
// Write a PHP program to generate a password with a length of 12 characters using this function and print the password.

function generatePassword($length){
    $randomArray = array();

    $smallLetters = range('a','z');
    $capitalLetters = range('A','Z');
    $numbers = range(0,9);
    $specialChars = str_split('(!@#$%^&*()_+)',1);

    for($i = 1; $i <= $length; $i++){
        array_push($randomArray, $smallLetters[array_rand($smallLetters)]);        
        $i++;        
        array_push($randomArray, $capitalLetters[array_rand($capitalLetters)]);        
        $i++;
        array_push($randomArray, $numbers[array_rand($numbers)]);        
        $i++;
        array_push($randomArray, $specialChars[array_rand($specialChars)]);                        
    }    
    shuffle($randomArray);
    echo implode('',$randomArray);    
}

generatePassword(12);
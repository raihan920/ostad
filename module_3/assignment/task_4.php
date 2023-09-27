<?php
// Task 4: Multidimensional Array

// Create a multidimensional array called $studentGrades to store the grades of three students. 
// Each student has grades for three subjects: Math, English, and Science.
// Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

function calculate_average_grade($studentGrades){
    $i = 1;
    foreach($studentGrades as $studentGrade){
        
        $count = count($studentGrade);
        $total = array_sum($studentGrade);
        $average = $total/$count;
        
        echo "Average grade of Student {$i} is: ".$average.PHP_EOL;
        
        $i++;
    }
}


$studentGrades = [
    [        
        'Math'=>80,
        'English'=>75,
        'Science'=>70
    ],
    [        
        'Math'=>60,
        'English'=>65,
        'Science'=>70
    ],
    [       
        'Math'=>90,
        'English'=>80,
        'Science'=>70
    ]
];


calculate_average_grade($studentGrades);
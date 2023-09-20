<?php
// Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
// step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
// should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. 
// Also do the same using while loop and do-while loop also.

function print_even_with_for($start, $end, $step){
    if($start%2 != 0){
        $start++;
    }
    for ($i=$start; $i<=$end; $i+=$step){        
        if($i%2 == 0){
            echo $i.', ';
        }
    }
}

function print_even_with_while($start, $end, $step) {
    while($start<=$end){
        if($start%2 != 0){
            $start++;
        }

        if($start%2 == 0){
            echo $start.', ';
        }

        $start+=$step;
    }
}

function print_even_with_do_while($start, $end, $step) {
    do{
        if($start%2 != 0){
            $start++;
        }

        if($start%2 == 0){
            echo $start.', ';
        }

        $start+=$step;
    }
    while($start<=$end);
}

print_even_with_for(1, 20, 2);
print_even_with_while(1, 20, 2);
print_even_with_do_while(1, 20, 2);

















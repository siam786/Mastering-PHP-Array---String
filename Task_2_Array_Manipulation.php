<?php

// Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

$numbers=[1,2,3,4,5,6,7,8,9,10];

function removeEven($numbers){
    for($i=0; $i<count($numbers); $i++){
        if($numbers[$i]%2==0){
            unset($numbers[$i]);
        }
    }
    return $numbers;
}   

print_r (removeEven($numbers));
<?php

/* Task 1: String Manipulation

Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP
function which takes "$text" as an argument to:

Convert the string to all lowercase.

Replace "brown" with "red" in the string.

Print the modified text.*/

$text = "The quick brown fox jumps over the lazy dog.";

function LowerText($text){
    $text = strtolower($text);
    echo $text;
}

echo(LowerText($text));
// Replace "brown" with "red" in the string.

$replaceText= str_replace("brown", "red", $text);
echo PHP_EOL;
echo $replaceText;
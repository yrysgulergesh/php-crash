<?php

$string = 'Hello World';
 // Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strlen('string');

// Find the position of the last occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo  strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length

echo substr($string, 0,5);
echo substr($string, 5);

// Stars with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}

$string2 = '<h1>Hello</h1>';
echo $string2;

$string3 = '<script>alert(2022)</script>';
//echo $string3;
echo htmlspecialchars($string3);

printf('%s likes to %s', 'Yrysgul', 'code');
printf('1+1=%f', 1+1);
<?php

/**
 * Array Merge function in PHP
 */

// Define arrays
$names = ['John', 'Doe', 'a'=> 'Ayan', 'Mofazzal', 'Hossain', 'Riyad', 'Rajon', '55'];
$cars = ['BMW', 'Ferari', 'Toyta'];
$food = ['Banana', 'a'=>"Apple", 'o'=>'Orange', 'Mango'];

$new_array = array_merge($names, $cars, $food);

// Print $new_array array
echo "<pre>";
print_r($new_array);
echo "</pre>";

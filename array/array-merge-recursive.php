<?php

/**
 * Array Merge Recursive function in PHP
 */

// Define arrays
$names = ['John', 'Doe', 'a'=> 'Ayan', 'Mofazzal', 'Hossain', 'Riyad', 'Rajon', '55'];
$cars = [
    ['color'=> ['Red', 'Black', 'Yellow'], 'Brand'=>['Disney']],
    'Ferari', 
    'Toyta'
];
$food = ['Banana', 'a'=>"Apple", 'o'=>'Orange', 'Mango'];

// Merge arrays recursively
$new_array = array_merge_recursive($names, $cars, $food);

// Print the merged array
echo "<pre>";
print_r($new_array);
echo "</pre>";

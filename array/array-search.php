<?php

/**
 * Array Search & in array function in PHP
 */

// Define an array of names
$names = ['John', 'Doe', 'Mofazzal', 'Hossain', 'Riyad', 'Rajon', '55'];

// Check if 'Mofazzal' is in the array (case-sensitive)
if(in_array('Mofazzal', $names)){
    echo "Successfully find in array";
}else{
    echo "can't find in array";
}

echo '<br>';

// Check if the integer value 55 is in the array (strict comparison)
if(in_array(55, $names, true)){
    echo "integer value find in array"; 
}else{
    echo "integer value not find in array";
}

echo '<br><br>';

// Define an array of food items
$food = ['Banana', 'Apple', 'Mango', 'limes', 'Jackfruit'];
// Use array_search() to find the index of 'limes' in the $food array
echo array_search('limes', $food);

echo '<br>';

// Define an associative array of cars with their available colors
$cars = [
    'bmw' => 'black',
    'toyta' => 'white',
    'Ferari' => 'red',
];

echo array_search('white', $cars);
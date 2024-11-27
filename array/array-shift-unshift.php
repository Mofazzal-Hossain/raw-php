<?php

/**
 * Array shift & unshift function in PHP
 */

// Define arrays
$names = ['John', 'Doe', 'Mofazzal', 'Hossain', 'Riyad', 'Rajon', '55'];
$cars = ['BMW', 'Ferari', 'Toyta'];
$food = ['Banana', 'a'=>"Apple", 'o'=>'Orange', 'Mango'];

// Remove fast element from $cars
array_shift($cars);

// Add new elements to $names
array_unshift($names, 'Habib', 'Tayef', "Mahbub");

// Print $cars array
echo "<pre>";
print_r($cars);
echo "</pre>";

// Print $names array
echo "<pre>";
print_r($names);
echo "</pre>";